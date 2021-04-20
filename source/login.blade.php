---
title: "Login - Tailwind and Jigsaw"
---

@extends('_layouts.main')

@section('body')
<section class="min-h-screen flex items-stretch">
  <div class="hidden sm:flex w-6/12 relative items-center pattern text-white">
    <div class="w-4/5 xl:w-3/5 mx-auto">
      <h1 class="text-4xl lg:text-5xl font-bold text-left tracking-wide">Keep it special</h1>
      <p class="text-2xl lg:text-3xl my-4">Capture your personal memory in unique way, anywhere.</p> 
    </div>
  </div>

  <div class="flex w-full sm:w-6/12 items-center justify-center">
    <div class="w-4/6 mx-auto py-8">
      <h1 class="text-4xl tracking-wide font-bold text-left">Custom App Title</h1>
      <h3 class="mb-4 text-xl tracking-wide font-bold text-left">Sign in to your account</h3>

      <form action="/" class="px-4 py-5 sm:p-6 overflow-hidden rounded bg-gray-50 border border-gray-300">

        <div class="flex space-x-4">
          <a href="/" class="flex-1 flex items-center justify-center rounded border py-2 text-gray-600 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
          <svg class="w-12 h-6" fill="#4B5563" viewBox="0 0 48 24">
              <path d="M25.3 13.8l-2.4-6.9h-3.1l3.8 9.9H27l.6-1.4c0 .9.7 1.5 1.5 1.5.9 0 1.6-.7 1.6-1.6 0-.9-.7-1.6-1.6-1.6-.4 0-.8.2-1.1.5l2.9-7.4h-3.1l-2.5 7zM15.6 7.1c-2.9 0-5.2 1.6-5.4 4.4v-4H7.3v1.7c-.7-1.2-1.8-2-3.1-2C1.3 7.2 0 9.4 0 12.1s1.6 4.7 4.1 4.7c1.2 0 2.3-.5 3.1-1.6v.5c0 1.8-1 2.7-2.9 2.7-1.3 0-2.1-.3-3.1-.8L1 20.1c.8.3 2 .6 3.5.6 3.7 0 5.5-1.3 5.5-5.1v-3.2c.2 2.8 2.4 4.4 5.4 4.4 3.1 0 5.4-1.8 5.4-4.9s-2.1-4.8-5.2-4.8zM5.1 14.3v-.1c-.9 0-1.8-.8-1.8-2.2 0-1.3.6-2.3 1.8-2.3 1.4 0 2 1.2 2 2.2 0 1.5-.9 2.4-2 2.4zm10.5.4c-1.5 0-2.1-1.3-2.1-2.7 0-1.4.6-2.7 2.1-2.7s2.1 1.2 2.1 2.7-.6 2.7-2.1 2.7z"/>
              <path d="M48 7.2c-.3-.1-.7-.1-1.1-.1-1.4 0-2.2.7-2.8 1.9V7.4h-2.9v4.2c-.1-2.1-1.6-4.3-4-4.3-1.3 0-2.4.4-3.2 1.4V3.4h-3.2v13.2h3V15c.4 1 1.8 1.9 3.2 1.9 2.7 0 4.1-2.1 4.2-4.8v4.6h3.2v-3.9c0-1.8.8-2.9 2.3-2.9.4 0 .7 0 1.1.1v-.1l.2-2.7zm-12 7.1c-1.1 0-2-1-2-2.3 0-1.4.8-2.4 2-2.4 1.3 0 2 1.1 2 2.3 0 1.4-.8 2.4-2 2.4z"/>
            </svg>
          </a>
          <a href="/" class="flex-1 flex items-center justify-center rounded border py-2 text-gray-600 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
            <svg class="w-12 h-6" fill="#4B5563" viewBox="0 0 48 24">
              <path d="M25.3 13.8l-2.4-6.9h-3.1l3.8 9.9H27l.6-1.4c0 .9.7 1.5 1.5 1.5.9 0 1.6-.7 1.6-1.6 0-.9-.7-1.6-1.6-1.6-.4 0-.8.2-1.1.5l2.9-7.4h-3.1l-2.5 7zM15.6 7.1c-2.9 0-5.2 1.6-5.4 4.4v-4H7.3v1.7c-.7-1.2-1.8-2-3.1-2C1.3 7.2 0 9.4 0 12.1s1.6 4.7 4.1 4.7c1.2 0 2.3-.5 3.1-1.6v.5c0 1.8-1 2.7-2.9 2.7-1.3 0-2.1-.3-3.1-.8L1 20.1c.8.3 2 .6 3.5.6 3.7 0 5.5-1.3 5.5-5.1v-3.2c.2 2.8 2.4 4.4 5.4 4.4 3.1 0 5.4-1.8 5.4-4.9s-2.1-4.8-5.2-4.8zM5.1 14.3v-.1c-.9 0-1.8-.8-1.8-2.2 0-1.3.6-2.3 1.8-2.3 1.4 0 2 1.2 2 2.2 0 1.5-.9 2.4-2 2.4zm10.5.4c-1.5 0-2.1-1.3-2.1-2.7 0-1.4.6-2.7 2.1-2.7s2.1 1.2 2.1 2.7-.6 2.7-2.1 2.7z"/>
              <path d="M48 7.2c-.3-.1-.7-.1-1.1-.1-1.4 0-2.2.7-2.8 1.9V7.4h-2.9v4.2c-.1-2.1-1.6-4.3-4-4.3-1.3 0-2.4.4-3.2 1.4V3.4h-3.2v13.2h3V15c.4 1 1.8 1.9 3.2 1.9 2.7 0 4.1-2.1 4.2-4.8v4.6h3.2v-3.9c0-1.8.8-2.9 2.3-2.9.4 0 .7 0 1.1.1v-.1l.2-2.7zm-12 7.1c-1.1 0-2-1-2-2.3 0-1.4.8-2.4 2-2.4 1.3 0 2 1.1 2 2.3 0 1.4-.8 2.4-2 2.4z"/>
            </svg>
          </a>
          <a href="/" class="flex-1 flex items-center justify-center rounded border py-2 text-gray-600 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
            <svg class="w-12 h-6" fill="#4B5563" viewBox="0 0 48 24">
              <path d="M25.3 13.8l-2.4-6.9h-3.1l3.8 9.9H27l.6-1.4c0 .9.7 1.5 1.5 1.5.9 0 1.6-.7 1.6-1.6 0-.9-.7-1.6-1.6-1.6-.4 0-.8.2-1.1.5l2.9-7.4h-3.1l-2.5 7zM15.6 7.1c-2.9 0-5.2 1.6-5.4 4.4v-4H7.3v1.7c-.7-1.2-1.8-2-3.1-2C1.3 7.2 0 9.4 0 12.1s1.6 4.7 4.1 4.7c1.2 0 2.3-.5 3.1-1.6v.5c0 1.8-1 2.7-2.9 2.7-1.3 0-2.1-.3-3.1-.8L1 20.1c.8.3 2 .6 3.5.6 3.7 0 5.5-1.3 5.5-5.1v-3.2c.2 2.8 2.4 4.4 5.4 4.4 3.1 0 5.4-1.8 5.4-4.9s-2.1-4.8-5.2-4.8zM5.1 14.3v-.1c-.9 0-1.8-.8-1.8-2.2 0-1.3.6-2.3 1.8-2.3 1.4 0 2 1.2 2 2.2 0 1.5-.9 2.4-2 2.4zm10.5.4c-1.5 0-2.1-1.3-2.1-2.7 0-1.4.6-2.7 2.1-2.7s2.1 1.2 2.1 2.7-.6 2.7-2.1 2.7z"/>
              <path d="M48 7.2c-.3-.1-.7-.1-1.1-.1-1.4 0-2.2.7-2.8 1.9V7.4h-2.9v4.2c-.1-2.1-1.6-4.3-4-4.3-1.3 0-2.4.4-3.2 1.4V3.4h-3.2v13.2h3V15c.4 1 1.8 1.9 3.2 1.9 2.7 0 4.1-2.1 4.2-4.8v4.6h3.2v-3.9c0-1.8.8-2.9 2.3-2.9.4 0 .7 0 1.1.1v-.1l.2-2.7zm-12 7.1c-1.1 0-2-1-2-2.3 0-1.4.8-2.4 2-2.4 1.3 0 2 1.1 2 2.3 0 1.4-.8 2.4-2 2.4z"/>
            </svg>
          </a>
        </div>

        <div class="my-4 flex items-center justify-between">
          <span class="border-b border-gray-300 w-1/4 md:w-1/6"></span>
          <span class="text-xs text-center text-gray-500 uppercase">Or sign in with your credentials</span>
          <span class="border-b border-gray-300 w-1/4 md:w-1/6"></span>
        </div>

        <div>
          <label class="block text-sm font-bold text-left">Username</label>
          <input type="email" class="rounded p-2 block w-full appearance-none border transition duration-300 bg-gray-100 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
        </div>

        <div class="pt-4">
          <div class="flex justify-between items-center">
            <label class="block text-sm font-bold">Password</label>
            <a href="#" class="text-xs text-gray-500">Forget Password?</a>
          </div>
          <input type="password" class="rounded p-2 block w-full appearance-none border transition duration-300 bg-gray-100 border-gray-300 focus:bg-white focus:border-transparent focus:outline-none focus:ring-2 focus:ring-gray-300">
        </div> 
          
        <div class="flex flex-col space-y-2 mt-6">
          <a href="{{ $page->baseUrl }}/" class="w-full text-center px-6 py-2 rounded text-sm font-medium border-transparent bg-gray-900 text-white hover:bg-gray-600 focus:bg-gray-600 border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600">Sign-in</a>
          
          <a href="{{ $page->baseUrl }}/register/" class="w-full text-center px-6 py-2 rounded text-sm font-medium border-transparent bg-gray-200 text-gray-700 hover:bg-gray-200 focus:bg-gray-300 border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300">Request your account</a>

        </div>   
      </form>
    </div>
  </div>
</section>
@endsection