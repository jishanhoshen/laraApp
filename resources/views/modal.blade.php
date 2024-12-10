                <!-- Main modal -->
                <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black/20">
                  <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 id="modal-title" class="text-xl font-semibold text-gray-900 dark:text-white">
                          {{ __('Title') }}
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                          </svg>
                          <span class="sr-only">{{ __('Close modal') }}</span>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <div class="p-4 md:p-5 space-y-4">
                        <form id="userForm" method="POST">
                          @csrf
                          <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-1">
                              <x-input-label for="name" :value="__('Full Name')" />
                              <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                              <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="col-span-1">
                              <x-input-label for="phone" :value="__('Phone')" />
                              <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
                              <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                            <div class="col-span-1">
                              <x-input-label for="pin" :value="__('Set PIN')" />
                              <x-text-input id="pin" class="block mt-1 w-full" type="password" name="pin" :value="old('pin')" required />
                              <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="col-span-1">
                              <x-input-label for="repeat_pin" :value="__('Repeat PIN')" />
                              <x-text-input id="repeat_pin" class="block mt-1 w-full" type="password" name="repeat_pin" :value="old('repeat_pin')" required />
                              <x-input-error :messages="$errors->get('repeat_pin')" class="mt-2" />
                            </div>
                          </div>
                          <div class="flex items-center justify-end mt-4">
                            <x-primary-button type="submit" id="submitBtn" class="ml-4 bg-indigo-500" onclick="event.preventDefault();submitForm()">
                              {{ __('Save') }}
                            </x-primary-button>
                          </div>
                        </form>
                      </div>

                    </div>
                  </div>
                </div>