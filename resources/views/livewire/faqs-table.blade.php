<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <!-- Add search input -->
                <input type="text" id="searchInput" placeholder="Search..." wire:model.debounce.500ms="search" />
                <!-- Display FAQs within a table -->
                <table class="border-collapse table-auto w-full text-sm">
                    <thead>
                        <tr>
                            <x-table-header name='faq_question' :orderDir='$orderDir' :orderBy="$orderBy">Question
                            </x-table-header>
                            <x-table-header name='faq_answer' :orderDir='$orderDir' :orderBy="$orderBy">Answer</x-table-header>
                            <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody id="faqsList">
                        @if ($faqs->count() > 0)
                            <!-- Loop through the FAQs and display them -->
                            @foreach ($faqs as $faq)
                                <tr class="p-2">
                                    <td>{{ $faq->faq_question }}</td>
                                    <td>{{ $faq->faq_answer }}</td>
                                    <td>
                                        <a href="#" class="edit-btn" data-id="{{ $faq->faq_id }}">Edit</a>
                                        <a href="#" class="delete-btn" data-id="{{ $faq->faq_id }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">No FAQs found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>

                <!-- Pagination links -->
                {{ $faqs->links() }}
            </div>
        </div>
    </div>
</div>
