<?php

/* test.dot */

class QNA {

    var $file_name = 'test.dot';

    var $stack = array();
    var $stack_i = -1;
    var $type_stack = array();

    public function __construct() {
        $this->fh = fopen($this->file_name, "r") or die("Unable to open file!");

        while ( $line = fgets($this->fh)) {



            if ($s = preg_match("/\.([a-z]*)\s(.*)|(.*)/", $line, $field)) {

                if (!empty($field[1])) {

                    $field_name = $field[1];
                    $field_value = $field[2];

                    switch ( $field_name ) {
                        case 'page':

                            if ($this->stack_i != -1 ) {
                                $this->end_page();
                            }

                            $this->start_page();

                            break;


                        case 'tab':

                            if ( $this->type_stack[$this->stack_i] == 'tab' ) {          // if we are in a tab end it
                                $this->end_tab();
                            }

                            $this->start_tab();                                         // Then start a tab
                            break;
    
                        default:
                            print_r($field);
                            break;

                    }

                } else {
                    $this->stack[$this->stack_i][] = $field[0];
                }
            } else {
            print "2- $line \n";
                $this->stack[$this->stack_i][] = $field[0];
            }

        }
        if ($this->stack_i != -1 ) {                // Print the current page if there is one.
            $this->end_page();
        }

    }

    function start_page() {
        $this->stack_i++;
        $this->stack[$this->stack_i] = '';
        $this->type_stack[$this->stack_i] = 'page';
        $this->stack[$this->stack_i][] = 'PAGE START';
    }

    function end_page() {

        if ( $this->type_stack[$this->stack_i] != 'page' ) {
            $this->end_tab();
        }

        $this->stack[$this->stack_i][] = 'PAGE END';
        foreach ( $this->stack[$this->stack_i] AS $line ) {
            print $line . "\n";
        }
        unset($this->stack[$this->stack_i]);
        unset($this->type_stack[$this->stack_i]);
        $this->stack_i--;


    }

    function start_tab() {
        $this->stack_i++;
        $this->stack[$this->stack_i] = '';
        $this->type_stack[$this->stack_i] = 'tab';
        $this->stack[$this->stack_i][] = '  TAB START';
    }

    function end_tab() {
        $this->stack[$this->stack_i][] = '  TAB END';
        foreach ( $this->stack[$this->stack_i] AS $line ) {
            print $line . "\n";
            $this->stack[$this->stack_i -1][] = $line;
        }
        unset($this->stack[$this->stack_i]);
        unset($this->type_stack[$this->stack_i]);
        $this->stack_i--;


    }
}

$qna = new QNA();


