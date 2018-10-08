{{-- CORE JS --}}
<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
<script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
    integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous">
</script>
{{-- CUSTOM JS --}}
<script src="{{ asset('/js/paper-dashboard.js') }}"></script>
<script src="{{ asset('/js/jquery-ui-1.12.1.custom.min.js') }}"></script>
{{-- SORTABLE TABLE COLUMNS JS PLUGIN --}}
<script src="{{ asset('/js/sorttable.js') }}"></script>
<script>
	$("#clickable-table").addSortWidget();
</script>