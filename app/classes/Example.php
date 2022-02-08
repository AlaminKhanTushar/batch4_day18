<?php


namespace App\classes;


class Example
{
    public $name;
    public $data = [];

    public function index()
    {
//        $this->data = [10, 20, 30, 'BITM', 'BASIS', 100.200, true];
////        echo $this->data[];
//        foreach ($this->data as $key => $item)
//        {
//            echo $key. ' ' .$item.'<br/>';
//        }
        $this->data=[
            0=>[
                'name'  => 'Sagor',
                'email' => 'sagor@gamil.com',
                'Mobile'=> [
                    'personal' => '123456789',
                    'parent' => '122223333'
                ],

            ],
            1=>[
                'name'  => 'Foysal',
                'email' => 'foysal@gamil.com',
                'Mobile'=>[
                    'personal' => '123456789',
                    'parent' => '122223333'
                ],
            ],
            2 =>'BITM',
            3 => [
                'name' => 'sojib',
                'email' => 'sojib@gamil.com',
                'mobile' => '9887776666'
            ]
        ];
//        echo $this->data[1]['name'];



//        foreach ($this->data as $item)
//        {
////            echo $item ['name'].' '.$item['email']. ' '. ['Mobile'].'<br/>';
//
//            if (is_array($item))
//            {
//                echo '<br/>';
//                foreach ($item as $value)
//                {
//                    if (is_array($value))
//                    {
//                        foreach ($value as  $v_value)
//                        {
//                            echo $v_value.'<br/>';
//                        }
//                    }
//                    else{
//                        echo $value.'<br/>';
//                    }
//                }
//            }
//
//            else{
//                echo $item;
//            }
//            echo '<br/>';
//        }
//        echo '<pre>';
////        print_r($this->data);
//        var_dump($this->data);

    }
}