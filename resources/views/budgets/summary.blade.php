@extends('layouts.app')
@section('content')
@section('title')
<title>Budget Summary</title>
@endsection
@push('js')
<script src="{{asset('js\DataTables\datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js\DataTables\Buttons-2.4.2\js\buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('js\DataTables\Buttons-2.4.2\js\buttons.colVis.min.js')}}"></script>
<script src="{{asset('js\DataTables\Buttons-2.4.2\js\buttons.html5.min.js')}}"></script>
<script src="{{asset('js/Select2/select2.min.js')}}"></script>
<script src="{{asset('js/Select2/form_select2.js')}}"></script>
@endpush

@push('css')
<link rel="stylesheet" href="{{asset('js/DataTables\datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('js\DataTables\Buttons-2.4.2\css\buttons.bootstrap.min.css')}}">
@endpush


<div class="content">
    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">S233 Budget Summary</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="row text-center">
                            <div class="col-3">
                                <div class="mb-3">
                                    <h5 class="mb-0">S232</h5>
                                    <div class="text-muted fs-sm">Budget Code</div>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="mb-3">
                                    <h5 class="mb-0">Operative</h5>
                                    <div class="text-muted fs-sm">Budget type</div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <h5 class="mb-0">1402/01/01 - 1402/01/30</h5>
                                    <div class="text-muted fs-sm">Start date - End date</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="row text-center">
                            <div class="col-4">
                                <div class="mb-3">
                                    <h5 class="mb-0">10000 &#1547;</h5>
                                    <div class="text-muted fs-sm">Total Amount</div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="mb-3">
                                    <h5 class="mb-0">5000 &#1547;</h5>
                                    <div class="text-muted fs-sm">Spent Amount</div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="mb-3">
                                    <h5 class="mb-0 text-danger">5000 &#1547;</h5>
                                    <div class="text-muted fs-sm">Remaining Amount</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card" style="min-height:800px">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="card-title fw-semibold">All Transactions</h2>
                        </div>
                        {{-- <div>
                            <a href="#" class="btn btn-light"> Add Budget Income</a>
                            <a href="#" class="btn btn-light"> Add Expense</a>
                            <a href="#" class="btn btn-light"> Add Procurement</a>
                            <a href="#" class="btn btn-light"> Add Loan</a>
                        </div> --}}
                        <div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-plus me-2"></i>
                                    Add transaction
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{route('incomes.create')}}" class="dropdown-item">Budget Income</a>
                                    <a href="#" class="dropdown-item">Expense</a>
                                    <a href="#" class="dropdown-item">Procurement</a>
                                    <a href="#" class="dropdown-item">Loan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#budget_incomes" class="nav-link active" data-bs-toggle="tab" aria-selected="false"
                                role="tab">
                                Budget Incomes
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#expenses" class="nav-link" data-bs-toggle="tab" aria-selected="true" role="tab">
                                Expenses
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#procurements" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab">
                                Procurements
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#loans" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab">
                                Loans
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <div class="tab-pane fade active show" id="budget_incomes" role="tabpanel">
                            <div class="card card-table table-responsive mb-0">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Amount</th>
                                            <th>Payee</th>
                                            <th>Date</th>
                                            <th>Discription</th>
                                            <th>Inserted by</th>
                                            <th>Action(s)</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td><strong>23</strong></td>
                                            <td>30000 &#1547;</td>
                                            <td>Obaidullah Karimi</td>
                                            <td>1402/02/22 12:21:12</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                                                eveniet
                                                libero, nam
                                                corrupti similique explicabo culpa totam!.
                                            </td>
                                            <td>Faridullah</td>
                                            <td>
                                                <div class="list-icons">
                                                    <a href="{{route('incomes.edit',2)}}"
                                                        class="list-icons-item text-primary"><i class="ph-note-pencil"
                                                            title="Edit"></i></a>
                                                    <a href="#" class="list-icons-item text-danger"
                                                        data-bs-toggle="modal" data-bs-target="#budget_income_delete"><i
                                                            class="ph-trash" title="Move to trash"></i></a>
                                                </div>
                                                <!-- Budget Income delete -->
                                                <div id="budget_income_delete" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Delete</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h6>Are you sure to delete? if you want to delete and
                                                                    return the income amount then click "Delete and
                                                                    Return Amount".</h6>
                                                                <div class="mb-1 d-flex justify-content-end">
                                                                    <a href="#" class="btn btn-danger m-1">Delete and
                                                                        Return Amount</a>
                                                                    <a href="#" class="btn btn-danger m-1">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /budget income delete -->
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="expenses" role="tabpanel">
                            <div class="card" style="min-height:800px">
                                <div class="card-header">
                                    <div class="accordion" id="accordion_collapsed">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button fw-semibold collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsed_item1">
                                                    Apply filter
                                                </button>
                                            </h2>
                                            <div id="collapsed_item1" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion_collapsed">
                                                <form method="POST" action="{{route('test.post')}}" id="filter_form">
                                                    @csrf
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label for="payee">Payee</label>
                                                                <select name="payees" id="payee" class="form-control"
                                                                    multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">Rahimullah</option>
                                                                    <option value="2">Obaidullah</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label for="type">Type</label>
                                                                <select name="types" id="type" class="form-control"
                                                                    multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">Miscellaneous</option>
                                                                    <option value="2">Other</option>
                                                                </select>

                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="description">Description</label>
                                                                <select name="descriptions" id="description"
                                                                    class="form-control" multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">Lorem Ipsum..</option>
                                                                    <option value="2">Lorem Ipsum....</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label for="deputy">Deputy</label>
                                                                <select name="deputies" id="deputy" class="form-control"
                                                                    multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">Operative</option>
                                                                    <option value="2">Salaries</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="administration">Administration</label>
                                                                <select name="administrations" id="administration"
                                                                    class="form-control" multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">Logistic</option>
                                                                    <option value="2">IC3</option>
                                                                    <option value="3">IC6</option>
                                                                    <option value="4">IC7</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                From: <input type="date" name="from_date" id=""
                                                                    class="form-control">

                                                            </div>
                                                            <div class="col-lg-6">
                                                                To: <input type="date" name="to_date" id=""
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 mt-2">
                                                                <button type="submit"
                                                                    class="btn btn-light">Filter</button>
                                                                <button type="button" class="btn btn-danger"
                                                                    onclick="resetForm()">Reset</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body">

                                    <div class="table-responsive mb-0">
                                        <table class="table table-sm table-bordered cell-border" style="width:100%"
                                            id="expenses_table">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">No.</th>
                                                    <th colspan="2">Consumer Info</th>
                                                    <th rowspan="2">Type</th>
                                                    <th rowspan="2">Discription</th>
                                                    <th rowspan="2">Amount</th>
                                                    <th rowspan="2">Recipient</th>
                                                    <th rowspan="2">Payer</th>
                                                    <th colspan="2">Location</th>

                                                    <th rowspan="2">Date</th>
                                                    <th rowspan="2">Reference</th>
                                                    <th rowspan="2">Inserted by</th>
                                                    <th rowspan="2">Action(s)</th>

                                                </tr>
                                                <tr>
                                                    {{-- <th>No.</th> --}}
                                                    <th>Payee</th>
                                                    <th>Province</th>
                                                    {{-- <th>Type</th>
                                                    <th>Discription</th>
                                                    <th>Amount</th>
                                                    <th>Recipient</th>
                                                    <th>Payer</th> --}}
                                                    <th>Duputy</th>
                                                    <th>Administration(s)</th>
                                                    {{-- <th>Date</th>
                                                    <th>Reference</th>
                                                    <th>Inserted by</th>
                                                    <th>Action(s)</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>21</strong></td>
                                                    <td><a href="#">Rahimullah Rahimi</a></td>
                                                    <td>Paktia</td>
                                                    <td>Expense</td>
                                                    <td>
                                                        Lorem ipsum
                                                    </td>
                                                    <td>5000 &#1547;</td>
                                                    <td>Obaidullah Karimi</td>
                                                    <td>Zakirullah</td>
                                                    <td>Supportive</td>
                                                    <td>
                                                        <span class="badge bg-primary">Logistic</span>
                                                        <span class="badge bg-primary">Plan and Policy</span>
                                                    </td>
                                                    <td>1402/02/23 12:21:12</td>
                                                    <td>Ahmad Shah</td>
                                                    <td>Faridullah khan</td>
                                                    <td>
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item text-primary"><i
                                                                    class="ph-note-pencil" title="Edit"></i></a>
                                                            <a href="#" class="list-icons-item text-danger"><i
                                                                    class="ph-trash" title="Move to trash"></i></a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>

                                                    <td><strong>22</strong></td>
                                                    <td><a href="#">Rahmanullah Rahimi</a></td>
                                                    <td>Paktia</td>
                                                    <td>Expense</td>
                                                    <td>
                                                        Lorem ipsum
                                                    </td>
                                                    <td>50000 &#1547;</td>
                                                    <td>Obaidullah Karimi</td>
                                                    <td>Zakirullah</td>
                                                    <td>Supportive</td>
                                                    <td>
                                                        <span class="badge bg-primary">Logistic</span>
                                                        <span class="badge bg-primary">Plan and Policy</span>
                                                    </td>
                                                    <td>1402/02/22 12:21:12</td>
                                                    <td>Ahmad Shah</td>
                                                    <td>Faridullah</td>
                                                    <td>
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item text-primary"><i
                                                                    class="ph-note-pencil" title="Edit"></i></a>
                                                            <a href="#" class="list-icons-item text-danger"><i
                                                                    class="ph-trash" title="Move to trash"></i></a>
                                                        </div>
                                                    </td>

                                                </tr>
                                            </tbody>
                                            {{-- <tfoot>
                                                <tr>
                                                    <td colspan="5">Total:</td>
                                                    <td><strong>1500</strong> &#1547;</td>
                                                    <td colspan="8"></td>
                                                </tr>
                                            </tfoot> --}}
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function() {  
                                $.extend( $.fn.dataTable.defaults, {
                                    autoWidth: false,
                                    dom: '<"datatable-header justify-content-start"f<"ms-sm-auto"l><"ms-sm-3"B>><"datatable-scroll-wrap"t><"datatable-footer"ip>',
                                    language: {
                                        search: '<span class="me-3">Filter:</span> <div class="form-control-feedback form-control-feedback-end flex-fill">_INPUT_<div class="form-control-feedback-icon"><i class="ph-magnifying-glass opacity-50"></i></div></div>',
                                        searchPlaceholder: 'Type to filter...',
                                        lengthMenu: '<span class="me-3">Show:</span> _MENU_',
                                        paginate: { 'first': 'First', 'last': 'Last', 'next': document.dir == "rtl" ? '&larr;' : '&rarr;', 'previous': document.dir == "rtl" ? '&rarr;' : '&larr;' }
                                    }
                                });
                                var table = $('#expenses_table').DataTable({
                                    buttons: [
                                        {
                                        extend: 'colvis',
                                        className: 'btn btn-light dropdown-toggle'
                                    },
                                    {
                                        extend: 'excelHtml5',
                                        className: 'btn btn-light'
                                    },
                                    ],
                                    
                                });
                                function oneSelectAll(select_id, form_id, select){
                                    var mySelect = $(select_id).select2();
                                
                                    mySelect.on('change', function() {
                                    var selectedValues = mySelect.val();
                                
                                    // Check if "all" is selected
                                    if (selectedValues && selectedValues.includes('all')) {
                                        // Disable all other options
                                        mySelect.find('option[value!="all"]').prop('disabled', true);
                                    } else {
                                        // Enable all options
                                        mySelect.find('option').prop('disabled', false);
                                    }
                                    });
                                
                                    $(form_id).submit(function(event) {
                                    var selectedValues = mySelect.val();
                                
                                    // Check if "all" is selected, then set selectedValues to all options
                                    if (selectedValues && selectedValues.includes('all')) {
                                        selectedValues = mySelect.find('option[value!="all"]').map(function() {
                                        return $(this).val();
                                        }).get();
                                    }
                                
                                    // Remove the "all" option from the selected values if present
                                    var index = selectedValues.indexOf('all');
                                    if (index !== -1) {
                                        selectedValues.splice(index, 1);
                                    }
                                
                                    // Convert selectedValues to an array
                                    selectedValues = Array.isArray(selectedValues) ? selectedValues : [selectedValues];
                                
                                    // Create a hidden input field for each selected value
                                    for (var i = 0; i < selectedValues.length; i++) {
                                        var hiddenInput = $('<input>').attr({
                                        type: 'hidden',
                                        name: select,
                                        value: selectedValues[i]
                                        });
                                
                                        // Append each hidden input to the form
                                        $(form_id).append(hiddenInput);
                                    }
                                
                                    // Now, you can use the selectedValues array as needed
                                
                                    // If you want to prevent the default form submission, you can uncomment the following line
                                    // event.preventDefault();
                                    });
                                }
                                oneSelectAll('#payee', '#filter_form', 'payees[]');
                                oneSelectAll('#type', '#filter_form', 'types[]');
                                oneSelectAll('#description', '#filter_form', 'descriptions[]');
                                oneSelectAll('#deputy', '#filter_form', 'deputies[]');
                                oneSelectAll('#administration', '#filter_form', 'administrations[]');
                           
                            });
                            function resetForm() {
                                $('#payee').val(null).trigger('change');
                                $('#payee').find('option').prop('disabled', false);
                                $('#filter_form').find('input[name="payees[]"]').remove();

                                $('#type').val(null).trigger('change');
                                $('#type').find('option').prop('disabled', false);
                                $('#filter_form').find('input[name="types[]"]').remove();

                                $('#description').val(null).trigger('change');
                                $('#description').find('option').prop('disabled', false);
                                $('#filter_form').find('input[name="descriptions[]"]').remove();

                                $('#deputy').val(null).trigger('change');
                                $('#deputy').find('option').prop('disabled', false);
                                $('#filter_form').find('input[name="deputies[]"]').remove();

                                $('#administration').val(null).trigger('change');
                                $('#administration').find('option').prop('disabled', false);
                                $('#filter_form').find('input[name="administrations[]"]').remove();

                                $('#filter_form').find('input[name="from_date"]').val('');
                                $('#filter_form').find('input[name="to_date"]').val('');
                                
                               
                            }
                        </script>

                        <div class="tab-pane fade" id="procurements" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <div class="accordion" id="accordion_collapsed">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button fw-semibold collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsed_item1">
                                                    Apply filter
                                                </button>
                                            </h2>
                                            <div id="collapsed_item1" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion_collapsed">
                                                <form method="POST" action="{{route('test.post')}}"
                                                    id="pro_filter_form">
                                                    @csrf
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label for="pro_payee">Payee</label>
                                                                <select name="pro_payees" id="pro_payee"
                                                                    class="form-control" multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">Rahimullah</option>
                                                                    <option value="2">Obaidullah</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label for="type">Item</label>
                                                                <select name="items" id="item" class="form-control"
                                                                    multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">Optiplex S342</option>
                                                                    <option value="2">Mouses</option>
                                                                </select>

                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label for="type">Location</label>
                                                                <select name="locations" id="location"
                                                                    class="form-control" multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">China</option>
                                                                    <option value="2">Turkey</option>
                                                                </select>

                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label for="type">Currency</label>
                                                                <select name="currencies" id="currency"
                                                                    class="form-control" multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">AFN</option>
                                                                    <option value="2">USD</option>
                                                                    <option value="3">TKR</option>
                                                                </select>

                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label for="pro_deputy">Deputy</label>
                                                                <select name="pro_deputies" id="pro_deputy"
                                                                    class="form-control" multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">Professtional</option>
                                                                    <option value="2">Supportive</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="pro_administration">Administration</label>
                                                                <select name="pro_administrations"
                                                                    id="pro_administration" class="form-control"
                                                                    multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">Logistic</option>
                                                                    <option value="2">IC3</option>
                                                                    <option value="3">IC6</option>
                                                                    <option value="4">IC7</option>
                                                                </select>

                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label for="pro_description">Description</label>
                                                                <select name="pro_descriptions" id="pro_description"
                                                                    class="form-control" multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">Lorem Ipsum..</option>
                                                                    <option value="2">Lorem Ipsum....</option>
                                                                </select>

                                                            </div>
                                                            <div class="col-lg-3">
                                                                From: <input type="date" name="from_date" id=""
                                                                    class="form-control">

                                                            </div>
                                                            <div class="col-lg-3">
                                                                To: <input type="date" name="to_date" id=""
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 mt-2">
                                                                <button type="submit"
                                                                    class="btn btn-light">Filter</button>
                                                                <button type="button" class="btn btn-danger"
                                                                    onclick="resetForm()">Reset</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="procurements_table">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">No.</th>
                                                    <th colspan="5">Item details</th>
                                                    <th rowspan="2">Location</th>
                                                    <th colspan="4">Expense for</th>
                                                    <th rowspan="2">Payer</th>
                                                    <th rowspan="2">Date</th>
                                                    <th rowspan="2">Reference</th>
                                                    <th rowspan="2">Discription</th>
                                                    <th rowspan="2">Action(s)</th>
                                                </tr>
                                                <tr>
                                                    <th>item</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Total Price</th>
                                                    <th>Currency</th>
                                                    <th>Deputy</th>
                                                    <th>Administration</th>
                                                    <th>Payee</th>
                                                    <th>Recipient</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>22</strong></td>
                                                    <td>Desktop Optiplex 2322</td>
                                                    <td>15</td>
                                                    <td>15000</td>
                                                    <td>1500000</td>
                                                    <td>AFN</td>
                                                    <td>China</td>
                                                    <td>Software</td>
                                                    <td>IC6</td>
                                                    <td>Rahimullah Rahimi</td>
                                                    <td>Obaidullah Karimi</td>
                                                    <td>Faridullah Khaksar</td>
                                                    <td>1402/02/23</td>
                                                    <td>Eng. Raza Khan</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                                    <td>
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item text-primary"><i
                                                                    class="ph-note-pencil" title="Edit"></i></a>
                                                            <a href="#" class="list-icons-item text-danger"><i
                                                                    class="ph-trash" title="Move to trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function() {  
                                $.extend( $.fn.dataTable.defaults, {
                                    autoWidth: false,
                                    colReorder:true,
                                    dom: '<"datatable-header justify-content-start"f<"ms-sm-auto"l><"ms-sm-3"B>><"datatable-scroll-wrap"t><"datatable-footer"ip>',
                                    language: {
                                        search: '<span class="me-3">Filter:</span> <div class="form-control-feedback form-control-feedback-end flex-fill">_INPUT_<div class="form-control-feedback-icon"><i class="ph-magnifying-glass opacity-50"></i></div></div>',
                                        searchPlaceholder: 'Type to filter...',
                                        lengthMenu: '<span class="me-3">Show:</span> _MENU_',
                                        paginate: { 'first': 'First', 'last': 'Last', 'next': document.dir == "rtl" ? '&larr;' : '&rarr;', 'previous': document.dir == "rtl" ? '&rarr;' : '&larr;' }
                                    }
                                });
                                var table = $('#procurements_table').DataTable({
                                    buttons: [
                                        {
                                        extend: 'colvis',
                                        className: 'btn btn-light dropdown-toggle'
                                    },
                                    {
                                        extend: 'excelHtml5',
                                        className: 'btn btn-light'
                                    },
                                    ],
                                    
                                });
                                function oneSelectAll(select_id, form_id, select){
                                    var mySelect = $(select_id).select2();
                                
                                    mySelect.on('change', function() {
                                    var selectedValues = mySelect.val();
                                
                                    // Check if "all" is selected
                                    if (selectedValues && selectedValues.includes('all')) {
                                        // Disable all other options
                                        mySelect.find('option[value!="all"]').prop('disabled', true);
                                    } else {
                                        // Enable all options
                                        mySelect.find('option').prop('disabled', false);
                                    }
                                    });
                                
                                    $(form_id).submit(function(event) {
                                    var selectedValues = mySelect.val();
                                
                                    // Check if "all" is selected, then set selectedValues to all options
                                    if (selectedValues && selectedValues.includes('all')) {
                                        selectedValues = mySelect.find('option[value!="all"]').map(function() {
                                        return $(this).val();
                                        }).get();
                                    }
                                
                                    // Remove the "all" option from the selected values if present
                                    var index = selectedValues.indexOf('all');
                                    if (index !== -1) {
                                        selectedValues.splice(index, 1);
                                    }
                                
                                    // Convert selectedValues to an array
                                    selectedValues = Array.isArray(selectedValues) ? selectedValues : [selectedValues];
                                
                                    // Create a hidden input field for each selected value
                                    for (var i = 0; i < selectedValues.length; i++) {
                                        var hiddenInput = $('<input>').attr({
                                        type: 'hidden',
                                        name: select,
                                        value: selectedValues[i]
                                        });
                                
                                        // Append each hidden input to the form
                                        $(form_id).append(hiddenInput);
                                    }
                                
                                    // Now, you can use the selectedValues array as needed
                                
                                    // If you want to prevent the default form submission, you can uncomment the following line
                                    // event.preventDefault();
                                    });
                                }
                                oneSelectAll('#pro_payee', '#pro_filter_form', 'pro_payees[]');
                                oneSelectAll('#item', '#pro_filter_form', 'items[]');
                                oneSelectAll('#location', '#pro_filter_form', 'locations[]');
                                oneSelectAll('#currency', '#pro_filter_form', 'currencies[]');
                                oneSelectAll('#pro_deputy', '#pro_filter_form', 'pro_deputies[]');
                                oneSelectAll('#pro_administration', '#pro_filter_form', 'pro_administrations[]');
                                oneSelectAll('#pro_description', '#pro_filter_form', 'pro_descriptions[]');
                           
                            });
                            function resetForm() {
                                $('#payee').val(null).trigger('change');
                                $('#payee').find('option').prop('disabled', false);
                                $('#pro_filter_form').find('input[name="payees[]"]').remove();

                                $('#item').val(null).trigger('change');
                                $('#item').find('option').prop('disabled', false);
                                $('#pro_filter_form').find('input[name="items[]"]').remove();

                                $('#location').val(null).trigger('change');
                                $('#location').find('option').prop('disabled', false);
                                $('#pro_filter_form').find('input[name="locations[]"]').remove();

                                $('#currency').val(null).trigger('change');
                                $('#currency').find('option').prop('disabled', false);
                                $('#pro_filter_form').find('input[name="currencies[]"]').remove();

                                $('#deputy').val(null).trigger('change');
                                $('#deputy').find('option').prop('disabled', false);
                                $('#pro_filter_form').find('input[name="deputies[]"]').remove();

                                $('#administration').val(null).trigger('change');
                                $('#administration').find('option').prop('disabled', false);
                                $('#pro_filter_form').find('input[name="administrations[]"]').remove();

                                $('#description').val(null).trigger('change');
                                $('#description').find('option').prop('disabled', false);
                                $('#pro_filter_form').find('input[name="descriptions[]"]').remove();

                                $('#pro_filter_form').find('input[name="from_date"]').val('');
                                $('#pro_filter_form').find('input[name="to_date"]').val('');
                                
                               
                            }
                        </script>

                        <div class="tab-pane fade" id="loans" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <div class="accordion" id="accordion_collapsed">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button fw-semibold collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsed_item1">
                                                    Apply filter
                                                </button>
                                            </h2>
                                            <div id="collapsed_item1" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion_collapsed">
                                                <form method="POST" action="{{route('test.post')}}"
                                                    id="pro_filter_form">
                                                    @csrf
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label for="pro_payee">Payee</label>
                                                                <select name="pro_payees" id="pro_payee"
                                                                    class="form-control" multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">Rahimullah</option>
                                                                    <option value="2">Obaidullah</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label for="type">Item</label>
                                                                <select name="items" id="item" class="form-control"
                                                                    multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">Optiplex S342</option>
                                                                    <option value="2">Mouses</option>
                                                                </select>

                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label for="type">Location</label>
                                                                <select name="locations" id="location"
                                                                    class="form-control" multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">China</option>
                                                                    <option value="2">Turkey</option>
                                                                </select>

                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label for="type">Currency</label>
                                                                <select name="currencies" id="currency"
                                                                    class="form-control" multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">AFN</option>
                                                                    <option value="2">USD</option>
                                                                    <option value="3">TKR</option>
                                                                </select>

                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label for="pro_deputy">Deputy</label>
                                                                <select name="pro_deputies" id="pro_deputy"
                                                                    class="form-control" multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">Professtional</option>
                                                                    <option value="2">Supportive</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="pro_administration">Administration</label>
                                                                <select name="pro_administrations"
                                                                    id="pro_administration" class="form-control"
                                                                    multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">Logistic</option>
                                                                    <option value="2">IC3</option>
                                                                    <option value="3">IC6</option>
                                                                    <option value="4">IC7</option>
                                                                </select>

                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label for="pro_description">Description</label>
                                                                <select name="pro_descriptions" id="pro_description"
                                                                    class="form-control" multiple="multiple">
                                                                    <option value="all" selected>All</option>
                                                                    <option value="1">Lorem Ipsum..</option>
                                                                    <option value="2">Lorem Ipsum....</option>
                                                                </select>

                                                            </div>
                                                            <div class="col-lg-3">
                                                                From: <input type="date" name="from_date" id=""
                                                                    class="form-control">

                                                            </div>
                                                            <div class="col-lg-3">
                                                                To: <input type="date" name="to_date" id=""
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 mt-2">
                                                                <button type="submit"
                                                                    class="btn btn-light">Filter</button>
                                                                <button type="button" class="btn btn-danger"
                                                                    onclick="resetForm()">Reset</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <table class="table table-sm table-bordered table-responsive" id="loans_table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Borrower</th>
                                                <th>Amount</th>
                                                <th>Paid amount</th>
                                                <th>Remaining amount</th>
                                                <th>Loan term</th>
                                                <th>Date</th>
                                                <th>Discription</th>
                                                <th>Status</th>
                                                <th>Action(s)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>34</strong></td>
                                                <td>Rahimullah Rahimi</td>
                                                <td>10000 &#1547;</td>
                                                <td>5000 &#1547;</td>
                                                <td>5000 &#1547;</td>
                                                <td>2 months</td>
                                                <td>1402/02/22</td>
                                                <td>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                </td>
                                                <td><span class="badge bg-danger">Not paid</span></td>
                                                <td class="text-center">
                                                    <div class="d-inline-flex">
                                                        <div class="dropdown">
                                                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                                <i class="ph-list"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item">
                                                                    <i class="ph-note-pencil me-2" title="Edit"></i>
                                                                    <span>Edit</span>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <i class="ph-trash me-2" title="Move to trash"></i>
                                                                    <span>Move to trash</span>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <i class="ph-file-doc me-2"></i>
                                                                    <span>Pay loan</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Transactions</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-sm table-bordered table-responsive">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Loan No.</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Discription</th>
                                                <th>Action(s)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>2</strong></td>
                                                <td><strong>34</strong></td>
                                                <td>10000 &#1547;</td>
                                                <td>1402/02/22</td>
                                                <td>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                </td>
                                                <td>
                                                    <div class="list-icons">
                                                        <a href="#" class="list-icons-item text-primary"><i
                                                                class="ph-note-pencil" title="Edit"></i></a>
                                                        <a href="#" class="list-icons-item text-danger"><i
                                                                class="ph-trash" title="Delete permanentally"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function() {  
                                $.extend( $.fn.dataTable.defaults, {
                                    autoWidth: false,
                                    colReorder:true,
                                    dom: '<"datatable-header justify-content-start"f<"ms-sm-auto"l><"ms-sm-3"B>><"datatable-scroll-wrap"t><"datatable-footer"ip>',
                                    language: {
                                        search: '<span class="me-3">Filter:</span> <div class="form-control-feedback form-control-feedback-end flex-fill">_INPUT_<div class="form-control-feedback-icon"><i class="ph-magnifying-glass opacity-50"></i></div></div>',
                                        searchPlaceholder: 'Type to filter...',
                                        lengthMenu: '<span class="me-3">Show:</span> _MENU_',
                                        paginate: { 'first': 'First', 'last': 'Last', 'next': document.dir == "rtl" ? '&larr;' : '&rarr;', 'previous': document.dir == "rtl" ? '&rarr;' : '&larr;' }
                                    }
                                });
                                var table = $('#loans_table').DataTable({
                                    buttons: [
                                        {
                                        extend: 'colvis',
                                        className: 'btn btn-light dropdown-toggle'
                                    },
                                    {
                                        extend: 'excelHtml5',
                                        className: 'btn btn-light'
                                    },
                                    ],
                                    
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>


@endsection