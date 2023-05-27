<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SVG Maps') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('ADD New Q/A') }}
                </div>
            </div>
        </div>
    </div>
    <livewire:faqs-table />
    <!-- Modal for Edit and Delete -->
    <!-- ... modal code ... -->

    <script>
        var typingTimer;
        var doneTypingInterval = 500; // Delay in milliseconds

        $(document).ready(function() {
            // Real-time search functionality
            $('#searchInput').on('input', function() {
                clearTimeout(typingTimer);
                typingTimer = setTimeout(performSearch, doneTypingInterval);
            });

            // Perform search when the user stops typing
            function performSearch() {
                var searchValue = $('#searchInput').val();

                $.ajax({
                    url: '{{ route('faqs.index') }}',
                    type: 'GET',
                    data: {
                        search: searchValue
                    },
                    success: function(response) {
                        // Update the FAQs list with the filtered results
                        $('#faqsList').html(response);
                    },
                    error: function(xhr, status, error) {
                        // Handle the error gracefully
                    }
                });
            }

            // Handle Edit button click
            // ... edit button code ...

            // Handle Delete button click
            // ... delete button code ...
        });
    </script>
</x-app-layout>
