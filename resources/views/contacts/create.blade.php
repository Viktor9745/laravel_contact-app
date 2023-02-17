@extends('layouts.main')

@section('title', 'Add new contact')

@section('content')
<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Add New Contact</strong>
            </div>
            <div class="card-body">
                <form action = {{route('contacts.store')}} method="post">
                    @csrf
                    @include('contacts._form')
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  @endsection
