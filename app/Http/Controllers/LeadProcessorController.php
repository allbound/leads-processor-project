<?php

namespace App\Http\Controllers;


class LeadProcessorController extends Controller {

    const FALSE = false;

    public $test_data = [];

    public function __construct() {

    }

    public function index($is_test = false) {

        if($is_test) {
            $get_leads = $this->test_data;
        } else {
            $get_leads = file_get_contents($_GET['csv_file']);
        }

        // Check to see if the file is a serialized csv
        try {
            $get_leads = unserialize($get_leads);
        } catch(\Exception $e) {

        }

        if($get_leads) {

            $leads = [];

            if($is_test) {
                $lines = explode("\n", $this->test_data);
            } else {
                $lines = explode("\n", file_get_contents($_GET['csv_file']));
            }


            // Unset the lines[0] element
            unset($lines[0]);

            foreach($lines as $someKey => $line) {
                $leads[$someKey] = new \stdClass();

                $columns = explode(', ', $line);

                foreach($columns as $c) {

                    // Check if this column is a phone number
                    $this_column_contains_a_phone_number = self::FALSE;

                    if(!$this_column_contains_a_phone_number) {
                        foreach (str_split($line) as $char) {
                            if ($char >= 0) {
                                $this_column_contains_a_phone_number = true;
                            }
                        }
                    }


                    if($this_column_contains_a_phone_number) {
                        // Do we have information on this phone number?
                        $hasInfo = DB::select('SELECT * FROM users WHERE phone_number = ' . $c);
                    }


                    // Check if this column is a phone number
                    $this_column_contains_a_phone_number = self::FALSE;

                    if(!$this_column_contains_a_phone_number) {
                        foreach (str_split($line) as $char) {
                            if ($char >= 0) {
                                $this_column_contains_a_phone_number = true;
                            }
                        }
                    }


                    if($this_column_contains_a_phone_number) {
                        $leads[$someKey]->phone_number = $c;
                    } else {
                        $name = explode(' ', $c);
                        $leads[$someKey]->first_name = $name[0];
                        $leads[$someKey]->last_name = $name[1];
                    }

                }

                $return_value = $this->upload_to_processor($leads);

            }


        }

        DB::insert('INSERT INTO uploads (file, timestamp) VALUES (\''.$_GET['csv_file'].'\', \''.Carbon::now().'\')');

        return $return_value;

    }

    public function upload_to_processor($data) {
        $one_star = new \Processor();
        $one_star->data = $data;
        $one_star->upload();
    }


}
