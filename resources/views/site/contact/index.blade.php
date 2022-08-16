@extends('layouts.app')

@section('content')

<section id="hero">
    <!-- Flex Container -->
    <div
      class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row"
    >
      <!-- Left item -->
      <form class="w-full max-w-lg md:center">
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              First Name
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
              Last Name
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              E-mail
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email">
            <p class="text-gray-600 text-xs italic">Some tips - as long as needed</p>
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              Message
            </label>
            <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message"></textarea>
            <p class="text-gray-600 text-xs italic">Re-size can be disabled by set by resize-none / resize-y / resize-x / resize</p>
          </div>
        </div>
        <div class="md:flex md:items-center">
          <div class="md:w-1/3">
            <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
              Send
            </button>
          </div>
          <div class="md:w-2/3"></div>
        </div>
      </form>
      <!-- Image -->
      <section class="ml-32">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46940.16238165125!2d21.12370793430492!3d42.66643787986961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1353620c7b46a107%3A0x71b5ba457df70c3!2sKFC%20Bresje%2C%20Fushe%20Kosove.!5e0!3m2!1sen!2s!4v1659007750273!5m2!1sen!2s"
            width="860" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    </div>
  </section>




@endsection
