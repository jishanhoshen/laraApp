<div class="btn-group flex justify-center">
    <button type="button" onclick="openModal({{ $row->id }})" class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-2 py-1 me-2 w-10 dark:bg-emerald-600 dark:hover:bg-emerald-700 focus:outline-none dark:focus:ring-emerald-800">
        <i class="fa fa-edit"></i>
    </button>
    <form action="" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-1 me-2 w-10 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800" onclick="confirmDelete({{ $row->id }})">
            <i class="fa fa-trash"></i>
        </button>
    </form>
</div>