@include('admin.include.header')

{{$user}}

@include('admin.include.footer-bar')
@include('admin.include.footer')
@push('scripts')
    <script>
        function delete_contest_category(delete_id) {
            if (confirm('Are you sure you want to delete this item?')) {

            }
        }
    </script>
@endpush