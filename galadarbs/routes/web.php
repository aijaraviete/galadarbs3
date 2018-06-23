<?php

	use App\User;
	use \Auth as Auth;

	Route::get('/', function(){
			return view('vecaisdarbs/parmums/index');
		})->name('parmums');
		
		Route::get('/katalogs', function(){
			return view('vecaisdarbs/katalogs/index');
		})->name('katalogs');
		
		Route::get('/kontakti', function(){
			return view('vecaisdarbs/kontakti/index');
		})->name('kontakti');
		
		Route::get('/nodarbibas', function(){
			return view('vecaisdarbs/nodarbibas/index');
		})->name('nodarbibas');

		Route::get('/ielogosanas', function(){
			return view('vecaisdarbs/ielogosanas/index');
		})->name('ielogosanas');


	Route::post('/ielogosanas', function(){
		$user = User::where('email', $_POST['email'])
			->where('password', $_POST['password'])
			->first();
		if(isset($user)){
			Auth::login($user);
			return redirect(route('parmums'));
		}
		else {
			return redirect()
					->back()
					->withInput()
					->with(['error' => 'Nepareizs e-pasts vai parole!']);
		}
		
	});

 ?>