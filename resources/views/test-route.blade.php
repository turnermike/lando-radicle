@extends('layouts.app')

@section('content')

  @push('styles')
    <style>
      main p code {
        padding: 0.075rem 0.25rem;
        background: var(--wp--preset--color--indigo-500);
        color: white;
      }

      main td code {
        padding: 0.075rem 0.25rem;
        background: var(--wp--preset--color--gray-200);
        color: black;
      }
    </style>
  @endpush

  <h1 class="text-4xl font-bold mb-6 flex gap-6 items-center">
    <x-icon-radicle class="w-24 h-24" />
    <b>Test Route Template</b>
  </h1>
