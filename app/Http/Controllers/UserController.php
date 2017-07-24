<?php
/**
 * Created by PhpStorm.
 * User: mrashidcit
 * Date: 16-Jul-17
 * Time: 12:35 PM
 */

namespace App\Http\Controllers;


class UserController
{
    public function index() {

        $users = collect([
            ['id' => '1', 'name' => 'Ali'],
            ['id' => '2', 'name' => 'Bilal'],
            ['id' => '3', 'name' => 'Usman'],
            ['id' => '4', 'name' => 'Ahmad'],
            ['id' => '5', 'name' => 'Dawood']

        ]);

        return view('user.index', compact('users'));

    }

    public function show(){
        return redirect()
            ->action('UserController@index');
    }

}