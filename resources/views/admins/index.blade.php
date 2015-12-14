@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Administrators</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Last Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($admins as $i => $admin) {
                            echo '<tr>';
                            echo '<td>'.($i+1).'</td>';
                            echo '<td>'.$admin->username.'</td>';
                            echo '<td>'.$admin->username.'</td>';
                            echo '<td>'.$admin->name.'</td>';
                            echo '<td>'.$admin->updated_at.'</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

@endsection

@section('script')
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
@endsection