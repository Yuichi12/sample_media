@extends('layouts.admin_master')
@section('title', '管理者用ユーザーリスト')
@section('content')

<main class="p-admin-main">
@foreach($u_list as $user)

<div>{{ $user->id }}</div>
<div>{{ $user->name }}</div>
<div>{{ $user->email }}</div>
@if($user->role === 0)
<a href="{{ route('admin.ban', [$user->id]) }}" class="js-btn-del p-admin-unlock" data-message="ユーザーID:{{ $user->id }}のアクセスを制限しますか？">アクセス可</a>
@else
<a href="{{ route('admin.unlock', [$user->id]) }}" class="js-btn-del p-admin-ban" data-message="ユーザーID:{{ $user->id }}のアクセスを許可しますか？">アクセス制限中</a>
@endif
<br>
<br>

@endforeach
<span class="pagination-wrapper">{{ $u_list->links() }}</span>
</main>
@endsection