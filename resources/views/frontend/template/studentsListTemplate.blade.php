<!-- DataTales Student Information -->
<div class="container py-5">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Student Information</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="border-bottom: 1px solid #ddd;">SL</th>
                            <th style="border-bottom: 1px solid #ddd;">Roll</th>
                            <th style="border-bottom: 1px solid #ddd;">Name</th>
                            <th style="border-bottom: 1px solid #ddd;">Father Name</th>
                            <th style="border-bottom: 1px solid #ddd;">Mother Name</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th style="border-bottom: 1px solid #ddd;">SL</th>
                            <th style="border-bottom: 1px solid #ddd;">Roll</th>
                            <th style="border-bottom: 1px solid #ddd;">Name</th>
                            <th style="border-bottom: 1px solid #ddd;">Father Name</th>
                            <th style="border-bottom: 1px solid #ddd;">Mother Name</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($studentInfos as $key => $studentInfo)
                            <tr>
                                <td style="border-bottom: 1px solid #ddd;">{{ $key + 1 }}</td>
                                <td style="border-bottom: 1px solid #ddd;">{{ $studentInfo->roll }}</td>
                                <td style="border-bottom: 1px solid #ddd;">{{ $studentInfo->studentName }}</td>
                                <td style="border-bottom: 1px solid #ddd;">{{ $studentInfo->fatherName }}</td>
                                <td style="border-bottom: 1px solid #ddd;">{{ $studentInfo->motherName }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
