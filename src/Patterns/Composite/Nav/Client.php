<?php

namespace Nav;

class Client
{
    public function __construct()
    {
        $submenu1=new Menu();
        $submenu1->add(new Button('submenu 1','/submenu1'))
                 ->add(new Button('submenu 2','/submenu2'));

        $submenu2=new Menu();
        $submenu2->add(new Button('submenu 3','/submenu1'))
                 ->add(new Button('submenu 4','/submenu2'))
                 ->add($submenu1);

        $submenu2->remove($submenu1);

        $menu=new Menu();
        $menu->add(new Button('test 1','/test1'))
             ->add(new Button('test 2','/test2'))
             ->add($submenu2);

        print_r($menu);
    }
}
