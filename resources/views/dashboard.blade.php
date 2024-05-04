@extends('layouts.app')
@section('title')
<title>Dashboard</title>
@endsection
@section('content')
<div class="content">
    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body mb-0">
                    <div class="d-flex align-items-center">
                        <i class="icon-coins icon-2x me-3"></i>

                        <div class="flex-fill text-end">
                            <h4 class="mb-0">652549 &#1547;</h4>
                            <span class="text-muted">Total remaining budgets amount {{--د ټولو بودیجو پاتې مقدار--}} </span>
                        </div>
                    </div>
                </div>
                <div class="accordion accordion-flush" id="budget_flush">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#budget_status">
                                Status
                            </button>
                        </h2>
                        <div id="budget_status" class="accordion-collapse collapse" data-bs-parent="#budget_flush">
                            <div class="accordion-body">
                                <div class="row d-flex justify-content-center text-center">
                                    <div class="col-4">
                                        <div class="fs-sm text-muted">Spent</div>
                                        <h5 class="mb-0">2,483</h5>
                                    </div>

                                    <div class="col-4">
                                        <div class="fs-sm text-muted">Declined</div>
                                        <h5 class="mb-0">1,257</h5>
                                    </div>

                                    <div class="col-4">
                                        <div class="fs-sm text-muted">Pending</div>
                                        <h5 class="mb-0">8,472</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body mb-0">
                    <div class="d-flex align-items-center">
                        <i class="icon-coins icon-2x me-3"></i>

                        <div class="flex-fill text-end">
                            <h4 class="mb-0">458559 &#1547;</h4>
                            <span class="text-muted">Total expenses amount</span>
                        </div>
                    </div>
                </div>
                <div class="accordion accordion-flush" id="expense_flush">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#expense_status">
                                Status
                            </button>
                        </h2>
                        <div id="expense_status" class="accordion-collapse collapse" data-bs-parent="#expense_flush">
                            <div class="accordion-body">
                                <div class="row d-flex justify-content-center text-center">
                                    <div class="col-4">
                                        <div class="fs-sm text-muted">Accepted</div>
                                        <h5 class="mb-0">2,483</h5>
                                    </div>

                                    <div class="col-4">
                                        <div class="fs-sm text-muted">Declined</div>
                                        <h5 class="mb-0">1,257</h5>
                                    </div>

                                    <div class="col-4">
                                        <div class="fs-sm text-muted">Pending</div>
                                        <h5 class="mb-0">8,472</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body mb-0">
                    <div class="d-flex align-items-center">
                        <i class="icon-coins icon-2x me-3"></i>

                        <div class="flex-fill text-end">
                            <h4 class="mb-0">652549 &#1547;</h4>
                            <span class="text-muted">Total budgets amount</span>
                        </div>
                    </div>
                </div>
                <div class="accordion accordion-flush" id="procurement_flush">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#procurements_status">
                                Status
                            </button>
                        </h2>
                        <div id="procurements_status" class="accordion-collapse collapse" data-bs-parent="#procurement_flush">
                            <div class="accordion-body">
                                <div class="row d-flex justify-content-center text-center">
                                    <div class="col-4">
                                        <div class="fs-sm text-muted">Accepted</div>
                                        <h5 class="mb-0">2,483</h5>
                                    </div>

                                    <div class="col-4">
                                        <div class="fs-sm text-muted">Declined</div>
                                        <h5 class="mb-0">1,257</h5>
                                    </div>

                                    <div class="col-4">
                                        <div class="fs-sm text-muted">Pending</div>
                                        <h5 class="mb-0">8,472</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body mb-0">
                    <div class="d-flex align-items-center">
                        <i class="icon-coins icon-2x me-3"></i>

                        <div class="flex-fill text-end">
                            <h4 class="mb-0">652549 &#1547;</h4>
                            <span class="text-muted">Total budgets amount</span>
                        </div>
                    </div>
                </div>
                <div class="accordion accordion-flush" id="loan_flush">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#loans_status">
                                Status
                            </button>
                        </h2>
                        <div id="loans_status" class="accordion-collapse collapse" data-bs-parent="#loan_flush">
                            <div class="accordion-body">
                                <div class="row d-flex justify-content-center text-center">
                                    <div class="col-4">
                                        <div class="fs-sm text-muted">Accepted</div>
                                        <h5 class="mb-0">2,483</h5>
                                    </div>

                                    <div class="col-4">
                                        <div class="fs-sm text-muted">Declined</div>
                                        <h5 class="mb-0">1,257</h5>
                                    </div>

                                    <div class="col-4">
                                        <div class="fs-sm text-muted">Pending</div>
                                        <h5 class="mb-0">8,472</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection