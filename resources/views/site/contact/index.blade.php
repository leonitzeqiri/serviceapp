@extends('layouts.app')
@section('content')


<section id="hero">
    <!-- Flex Container -->
    <div
    class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row"
    >
      <!-- Left item -->
      <form method="POST" action="{{ route('contact.store') }}" class="w-full max-w-lg md:center">
        @csrf

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              First Name
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="firstname" type="text" >
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
              Last Name
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" name="lastname" type="text">
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              E-mail
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email" id="email" type="email">
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"  for="grid-password">
              Message
            </label>
            <textarea class="no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" name="description" id="message"></textarea>
            <button class="p-3  py-2 px-6 pt-2 text-white bg-veryDarkBlue rounded-full baseline hover:bg-veryDarkBlue"  type="submit">
                Send
              </button>
          </div>
        </div>
        <div class="md:flex md:items-center pt-4">
        </div>
      </form>
      <!-- Image -->
      <section class="ml-32">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46940.16238165125!2d21.12370793430492!3d42.66643787986961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1353620c7b46a107%3A0x71b5ba457df70c3!2sKFC%20Bresje%2C%20Fushe%20Kosove.!5e0!3m2!1sen!2s!4v1659007750273!5m2!1sen!2s"
            width="860" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
            <br><br>
    </section>
    </div>
  </section>

@endsection
