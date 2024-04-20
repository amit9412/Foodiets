<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'Foodieits- Help';
?>

<section class="breadcrumb-section light-bg">
    <div class="container">
        <div class="breadcrumb-text">
            <h1>Your Help</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                    <li class="breadcrumb-item active">Help List</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section class="form-section pd-sec-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <?php $page = 'help';
                include(yii::getAlias('@web') . 'themes/frontend/profile-side-menu.php'); ?>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="text-right mb-2">
                    <button type="button" data-toggle="modal" data-target="#addQueries" class="btn btn-primary">Add
                        Queries</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>S.no</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Replay</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Food</td>
                                <td>
                                    <div class="break-txt">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error sed
                                        consectetur rem voluptatibus id tempore tenetur molestias asperiores
                                        autem vitae perspiciatis quisquam est nemo vel fugiat reprehenderit
                                        odit, in doloremque.
                                    </div>
                                </td>
                                <td>
                                    <div class="break-txt">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error sed
                                        consectetur rem voluptatibus id tempore tenetur molestias asperiores
                                        autem vitae perspiciatis quisquam est nemo vel fugiat reprehenderit
                                        odit, in doloremque.
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add Queries Modal -->
<div class="modal fade" id="addQueries" tabindex="-1" aria-labelledby="addQueriesLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addQueriesLabel">Add Queries</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <select class="form-control">
                            <option value="">Admin</option>
                            <option value="">Super Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Enter Comment"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>