<?php

Route::get('/test', function()
{
	return View::make('perfil.perfil')
                ->with("nombre","Christian");
                
});