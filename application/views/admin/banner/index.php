<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard<small>Control panel</small></h1>
    </section>
    <section class="content">
        <!-- Basic Forms -->
        <form action="<?= base_url('Adminhome/update')?>" method="post" enctype="multipart/form-data">
            <div class="box box-default">
                <div class="box-header with-border">
                <h3 class="card-title">Home page Banner</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Heading</label>
                            <input class="form-control" type="text" name="heading" value="<?= $banner['heading']?>">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Sub Heading</label>
                            <input class="form-control" type="text" name="sub_heading" value="<?= $banner['sub_heading']?>">
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="col-12">
                            <label for="">Description</label>
                            <textarea name="description" id="description"><?= $banner['description']?></textarea>
                            <script src="//cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>
                            <script>
                                CKEDITOR.replace('description');
                            </script>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Image</label>
                            <div style="width:200px;heght:200px">
                                <img src="<?= base_url().$banner['image']?>" alt="image" style="width:100%">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Select Image</label>
                            <input class="form-control" type="file" name="image">
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?= $banner['id']?>">
                    <div class="text-xs-right mt-20">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </form>
      <!-- /.box -->
    </section>
</div>