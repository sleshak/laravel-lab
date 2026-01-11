@extends("layouts.auth")
@section("title", "Test Page")
@section("style")
<style>
    body { background: yellow; }
</style>
@endsection
@section("content")
<h1>Test Extends</h1>
<p>This should work if Blade inheritance works</p>
@endsection
