<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-between items-center">
                    <h1 class="text-2xl font-bold ">Clients</h1>
                    <button type="button" onclick="openModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add Client</button>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table id="{{ $dataTable->getTableAttribute('id') }}" class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                @foreach($dataTable->collection as $item)
                                <th class="px-6 py-3 !text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">
                                    {{ __($item->title) }}
                                </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    @include('modal')
    @push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    <script type="module">
        const $static_modal = document.getElementById('static-modal');
        const staticModal = new Modal($static_modal, {
            backdrop: 'static',
        });

        window.openModal = function($id = null) {
            let modalTitle = $('#static-modal #modal-title');
            let modalInputName = $('#static-modal #name');
            // let modalInputEmail = $('#static-modal #email');
            let modalInputPhone = $('#static-modal #phone');
            let modalInputPin = $('#static-modal #pin');
            let submitBtn = $('#static-modal #submitBtn');

            if ($id) {
                axios.get('/system/user/edit/' + $id)
                    .then(response => {
                        console.log(response.data.name);
                        modalTitle.text('Update User');
                        modalInputName.focus();
                        modalInputName.val(response.data.name);
                        modalInputEmail.val(response.data.email);
                        submitBtn.text('Update');
                        submitBtn.attr('onclick', 'event.preventDefault();submitForm(' + response.data.id + ')');
                    })
                    .catch(error => {
                        console.log(error);
                    });
            }
            staticModal.show();
            modalTitle.text('Add Client');
            modalInputName.val('');
            // modalInputEmail.val('');
            modalInputPhone.val('');
            modalInputPin.val('');
            modalInputName.focus();
            submitBtn.text('Save');

        }

        window.submitForm = function($id = null) {
            var form = $('#userForm');
            if ($id) {
                axios.post('/clients/' + $id, $(form).serialize())
                    .then(response => {
                        if (response.data.status) {
                            staticModal.hide();

                            let relode = $('#users-table').DataTable();
                            relode.ajax.reload();

                        } else {
                            var keys = Object.keys(response.data.errors);
                            console.log(keys);

                            keys.forEach(function(d) {
                                $('#' + d).addClass('is-invalid');
                                $('#' + d + '_msg').text(response.data.errors[d][0]);
                            })
                        }
                    })
                    .catch(error => {
                        // console.log(error);

                    });
            } else {
                axios.post('/clients/store', $(form).serialize())
                    .then(response => {
                        if (response.data.status) {
                            staticModal.hide();
                            // toastr.success(response.data.message);

                            let relode = $('#users-table').DataTable();
                            relode.ajax.reload();

                        } else {
                            var keys = Object.keys(response.data.errors);
                            console.log(keys);

                            keys.forEach(function(d) {
                                $('#' + d).addClass('is-invalid');
                                $('#' + d + '_msg').text(response.data.errors[d][0]);
                            })
                        }
                    })
                    .catch(error => {
                        // console.log(error);

                    });
            }
        }

        document.addEventListener('keydown', function(event) {
            if (event.altKey && event.shiftKey && event.key === 'N') {
                // Prevent default action if necessary
                event.preventDefault();

                openModal();
            }
        });

        window.confirmDelete = function($id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.delete('/system/user/delete/' + $id)
                        .then(response => {
                            if (response.data.status) {
                                let relode = $('#users-table').DataTable();
                                relode.ajax.reload();
                            }
                        })
                        .catch(error => {
                            console.log(error);
                        });
                }
            })
        }
    </script>
    @endpush
</x-app-layout>