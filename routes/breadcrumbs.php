<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});
// Home > Mail > mail send
Breadcrumbs::for('mail.go_sendMail', function ($trail) {
    $trail->parent('mail');
    $trail->push('Compose Mail', route('mail.go_sendMail'));
});
// Home > Mail
Breadcrumbs::for('mail', function ($trail) {
    $trail->parent('home');
    $trail->push('Mail', route('mail'));
});
// Home > Blog > history
Breadcrumbs::for('user.history', function ($trail) {
    $trail->parent('home');
    $trail->push('History' ,route('user.history'));
});
// Home > Views Users
Breadcrumbs::for('user.views', function ($trail) {
    $trail->parent('home');
    $trail->push('Views Users' ,route('user.views'));
});
// Home > Views Users > create users
Breadcrumbs::for('user.create', function ($trail) {
    $trail->parent('user.views');
    $trail->push('Create User' ,route('user.create'));
});
// Home > Views Users > update > {id}
Breadcrumbs::for('user.goUpdate', function ($trail,$id) {
    $user = App\Models\User::find($id);
    $trail->parent('user.views');
    $trail->push("Update  : $user->name",route('user.goUpdate',$id));
});
// Home > Role
Breadcrumbs::for('role.views', function ($trail) {
    $trail->parent('home');
    $trail->push("ROLE",route('role.views'));
});
// Home > Role > Create role
Breadcrumbs::for('role.create', function ($trail) {
    $trail->parent('role.views');
    $trail->push("Create role",route('role.create'));
});
// Home > Role > Create role
Breadcrumbs::for('role.update', function ($trail,$id) {
    $role = Spatie\Permission\Models\Role::find($id);
    $trail->parent('role.views');
    $trail->push("Update Role  : $role->name",route('role.update',$id));
});
// Home > Role > Views Permission
Breadcrumbs::for('permistion.views', function ($trail) {
    $trail->parent('home');
    $trail->push("Views Permission",route('permistion.views'));
});
// Home > Role > Create permistion
Breadcrumbs::for('permistion.create', function ($trail) {
    $trail->parent('permistion.views');
    $trail->push("Create Permission",route('permistion.create'));
});




// // Home > Role > Create permistion
// Breadcrumbs::for('permistion.update', function ($trail,$id) {
//     $permission = Spatie\Permission\Models\Permission::find($id);
//     $trail->parent('permistion.views');
//     $trail->push("Update Permission / $permission->name",route('permistion.update'));
// });
// // Home > Blog > [Category]
// Breadcrumbs::for('user.history', function ($trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category->id));
// });

// // Home > Blog > [Category] > [Post]
// Breadcrumbs::for('post', function ($trail, $post) {
//     $trail->parent('category', $post->category);
//     $trail->push($post->title, route('post', $post->id));
// });