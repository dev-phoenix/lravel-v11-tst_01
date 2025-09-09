<?php

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
// app/Http/Resources/UserResource.php

Route::get('/users', function() {
    return UserResource::collection(User::all());
});
