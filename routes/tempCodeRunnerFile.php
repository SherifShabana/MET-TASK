Route::get('/display', [StudentController::class,'view'])->name('home');
Route::get('/display/result',[StudentController::class, 'result']);
Route::post('/display',[StudentController::class, 'make'])->name('making');