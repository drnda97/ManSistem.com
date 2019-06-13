<?php

class UsersController
{
  public function register()
	{
		$view = new View();
		$view->load('user', 'register');

	}
  public function login()
	{
		$view = new View();
		$view->load('user', 'login');

	}
}
