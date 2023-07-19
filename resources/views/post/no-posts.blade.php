<div class="alert alert-warning">
    لا يوجد اي من  منشورات لعرضها ....
    @auth
        اضف منشور جديد هنا 
    @endauth
    @guest
        Login <a href="{{ $loginLink }}">here</a> to add a new post.
    @endguest
</div>
