@extends('admin.master')

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
    <script>
        $(function () {
            'use strict';
            CKEDITOR.replace('editor');
            var dropZone = $('#drop-zone');
            var uploadForm = $('form');

            var startUpload = function(files) {
                console.log(files)
            }

            uploadForm.addEventListener('submit', function(e) {
                var uploadFiles = document.getElementById('js-upload-files').files;
                e.preventDefault()

                startUpload(uploadFiles)
            })

            dropZone.ondrop = function(e) {
                e.preventDefault();
                this.className = 'upload-drop-zone';

                startUpload(e.dataTransfer.files)
            }

            dropZone.ondragover = function() {
                this.className = 'upload-drop-zone drop';
                return false;
            }

            dropZone.ondragleave = function() {
                this.className = 'upload-drop-zone';
                return false;
            }

        });
    </script>

@stop

@section('styles')
    <style>
        .upload-drop-zone {
            height: 200px;
            border-width: 2px;
            margin-bottom: 20px;
        }

        .upload-drop-zone {
            color: #ccc;
            border-style: dashed;
            border-color: #ccc;
            line-height: 200px;
            text-align: center
        }
        .upload-drop-zone.drop {
            color: #222;
            border-color: #222;
        }
    </style>
@stop

@section('title')
    Add Product
@stop

@section('content')

    <form action="{{url('products')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="card col-md-8">
            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#product" aria-controls="product" role="tab"
                                                              data-toggle="tab">Product</a></li>
                    <li role="presentation"><a href="#images" aria-controls="images" role="tab"
                                               data-toggle="tab">Images</a></li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="product">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" placeholder="Enter the product name"
                                       required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Price</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon">Rs</span>
                                    <input type="text" class="form-control" name="price" required
                                           placeholder="Enter the unit price">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Quantity</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="qty" required
                                       placeholder="Enter the product quantity">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Condition</label>
                            <div class="col-sm-9">
                                <select class="form-control">
                                    <option>New</option>
                                    <option>Used</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" style="margin-bottom: 10px">Description</label>
                            <div class="col-sm-11">
                                <textarea id="editor" name="desc"
                                          placeholder="Enter the some description about the product"> </textarea>
                            </div>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="images">

                        <h4>Select files from your computer</h4>

                            <div class="form-inline">
                                <div class="form-group">
                                    <input type="file" name="files[]" id="js-upload-files" multiple>
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload
                                    files
                                </button>
                            </div>


                        <!-- Drop Zone -->
                        <h4>Or drag and drop files below</h4>
                        <div class="upload-drop-zone" id="drop-zone">
                            Just drag and drop files here
                        </div>

                        <!-- Progress Bar -->
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 60%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>

                        <!-- Upload Finished -->
                        <div class="js-upload-finished">
                            <h3>Processed files</h3>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-success"><span
                                            class="badge alert-success pull-right">Success</span>image-01.jpg</a>
                                <a href="#" class="list-group-item list-group-item-success"><span
                                            class="badge alert-success pull-right">Success</span>image-02.jpg</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-md-3 m-lr-10 options">
            <div id="publish" class="card">
                <h4 class="head">Publish</h4>
                <div class="content">
                    <span style="margin-right:5px;padding-top: 7px;display: inline-block;vertical-align: middle;font-weight: 700">
                    <i class="fa fa-eye" aria-hidden="true"></i> Visibility
                        </span>
                    <label class="radio-inline">
                        <input type="radio" name="visibility" value="1" checked> Public
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="visibility" value="0"> Private
                    </label>
                </div>
                <div class="footer">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </div>
            <div id="categories" class="card">
                <h4 class="head">Categories</h4>
                <div class="content">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            cat 1
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            cat 2
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            cat 3
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            cat 4
                        </label>
                    </div>
                </div>


            </div>

        </div>

    </form>


@stop