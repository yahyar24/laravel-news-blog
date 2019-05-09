<?php


Route::get('/', [
    'uses' =>'FrontEendController@index',
    'as'   =>'index'
]);

Route::post('/subscribe',function()
           {
               $email = request('email');
               
              Newsletter::subscribe($email);
               
               
              Session::flash('success' , 'successfly subscribed');
               return redirect()->back();
               
           });
           
           
Route::get('/post/{slug}',[
    'uses' =>'FrontEendController@singlePost',
    'as'   =>'post.single'

]);
Route::get('/results' , function(){
    
    $posts =\App\Post::where('title' , 'like', '%' . request('query'). '%' )->get();
        
        return view('results')->with('posts', $posts)
        ->with('title', 'search results:' . request('query'))
        ->with('settings', \App\Setting::first())
        ->with('categories' ,\App\Category::take(5)->get() )
        ->with('query', request('query'));   
});

Route::get('/category/{id}',[
    'uses' => 'FrontEendController@category',
    'as'  => 'category.single'
    
]);
Route::get('/tag/{id}',[
    'uses' => 'FrontEendController@tag',
    'as'  => 'tag.single'
    
]);

Route::get('/gallery',[
    'uses' => 'GalleryController@index',
    'as' => 'gallery'

]);

Route::get('/blogpost',[
    'uses' => 'BlogController@index',
    'as' => 'blogpost'

]);

Route::get('/contact',[
    'uses' => 'ContactController@index',
    'as' => 'contact'

]);
Route::get('/product',[
    'uses' => 'ProductController@index',
    'as' => 'product'

]);



Route::post('/book/store',[
    'uses' => 'BookController@store',
    'as' => 'book.store'
]);
Route::post('/message/store',[
    'uses' => 'MessagesController@store',
    'as' => 'message.store'
]);
 
 
 

Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function (){
    
Route::get('/message',[
    'uses' => 'MessagesController@index',
    'as' => 'message'
]);
Route::get('/message/delete/{id}',[
    'uses' => 'MessagesController@destroy',
    'as' => 'message.delete'
]);
Route::get('/book',[
    'uses' => 'BookController@index',
    'as' => 'book'
]);
Route::get('/book/delete/{id}',[
    'uses' => 'BookController@destroy',
    'as' => 'book.delete'
]);

    Route::get('/dashboard', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);

    Route::get('/post/create',[
        'uses' => 'PostController@create',
        'as' => 'post.create'
    ]);

    Route::get('/categories',[
        'uses' => 'categoriescontroller@index',
        'as' => 'categories'
    ]);

    Route::post('/post/store',[
        'uses' => 'PostController@store',
        'as' => 'post.store'
    ]);
    Route::get('/post/delete/{id}',[
        'uses' => 'PostController@destroy',
        'as' => 'post.delete'
    ]);

    Route::get('/post/kill/{id}',[
        'uses' => 'PostController@kill',
        'as' => 'post.kill'
    ]);
    Route::get('/post/restore/{id}',[
        'uses' => 'PostController@restore',
        'as' => 'post.restore'
    ]);

    Route::get('/post/edit/{id}',[
        'uses' => 'PostController@edit',
        'as' => 'post.edit'
    ]);
    Route::post('/post/update/{id}',[
        'uses' => 'PostController@update',
        'as' => 'post.update'
    ]);



    Route::get('/posts',[
        'uses' =>'PostController@index',
        'as' => 'posts'
    ]);

    Route::get('/posts/trashed',[
        'uses' =>'PostController@trashed',
        'as' => 'posts.trashed'
    ]);


    Route::get('/category/create',[
        'uses' => 'categoriescontroller@create',
        'as' => 'category.create'
    ]);
    Route::post('/category/store',[
        'uses' => 'categoriescontroller@store',
        'as' => 'category.store'
    ]);



    Route::get('/category/edit/{id}',[
        'uses' => 'categoriescontroller@edit',
        'as' => 'category.edit'
    ]);

    Route::get('/category/delete/{id}',[
        'uses' => 'categoriescontroller@destroy',
        'as' => 'category.delete'
    ]);

    Route::post('/category/update/{id}',[
        'uses' => 'categoriescontroller@update',
        'as' => 'category.update'
    ]);

    Route::get('/tags',[
       'uses' => 'TagsController@index',
       'as' => 'tags'
    ]);
    Route::get('/tag/create',[
        'uses' => 'TagsController@create',
        'as' => 'tag.create'
    ]);

    Route::get('/tag/edit/{id}',[
        'uses' => 'TagsController@edit',
        'as' => 'tag.edit'
    ]);
    Route::post('/tag/update/{id}',[
        'uses' => 'TagsController@update',
        'as' => 'tag.update'
    ]);
    Route::get('/tag/delete/{id}',[
        'uses' => 'TagsController@destroy',
        'as' => 'tag.delete'
    ]);

    Route::post('/tag/store',[
        'uses' => 'TagsController@store',
        'as' => 'tag.store'
    ]);

    Route::get('/users',[
        'uses' => 'UsersController@index',
        'as' => 'users'
    ]);
    Route::get('/user/create',[
        'uses' => 'UsersController@create',
        'as' => 'user.create'
    ]);
    Route::post('/user/store',[
        'uses' => 'UsersController@store',
        'as' => 'user.store'
    ]);
    Route::get('/user/delete/{id}',[
        'uses' => 'UsersController@destroy',
        'as' => 'user.delete'
    ]);

    Route::get('/user/admin/{id}',[
        'uses' => 'UsersController@admin',
        'as' => 'user.admin'
    ]);
    Route::get('/user/not_admin/{id}',[
        'uses' => 'UsersController@not_admin',
        'as' => 'user.not.admin'
    ]);
    Route::get('/user/profile',[
        'uses' => 'ProfilesController@index',
        'as' => 'user.profile'
    ]);

    Route::post('/user/profile/update',[
        'uses' => 'ProfilesController@update',
        'as' => 'user.profile.update'
    ]);
    Route::get('/settings',[
        'uses' => 'SettingsController@index',
        'as' => 'settings'
    ]);

    Route::post('/settings/update',[
        'uses' => 'SettingsController@update',
        'as' => 'settings.update'
    ]);




});



