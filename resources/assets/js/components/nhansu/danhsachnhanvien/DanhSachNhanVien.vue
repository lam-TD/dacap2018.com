<template id="danhsachnhanvien">
  <div class="page-wrapper" style="min-height: 291px;">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
          <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">Danh sách nhân viên</h3>
          </div>
          <div class="col-md-7 align-self-center">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Nhân sự</a></li>
                  <li class="breadcrumb-item">Danh sách nhân viên</li>
              </ol>
          </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
              <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" id="timkiem" class="form-control" placeholder="Nhập từ khóa để tìm kiếm...">
                            <button type="button" class="btn btn-info btn-sm btntimkiem" name="button">Tìm kiếm</button>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <router-link to="/danhsachnhanvien/themmoi" class="btn btn-primary pull-right"><i class="fa fa-plus-circle"></i> Thêm mới</router-link>
                        </div>
                      </div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="table_nhanvien">
                                <thead>
                                    <tr style="border-top: 1px solid #ddd;">
                                      <th>#</th>
                                      <th style="">Mã</th>
                                      <th style="">Tên nhân viên</th>
                                      <th>G/T</th>
                                      <th>Ngày sinh</th>
                                      <th>Nơi sinh</th>
                                      <th>Số CMND</th>
                                      <th>Ngày cấp</th>
                                      <th>Nơi cấp</th>
                                      <th>Tạm trú</th>
                                      <th style="width:400px;">Thường trú</th>
                                      <th>ĐT bàn</th>
                                      <th>Di động 1</th>
                                      <th>Di động 2</th>
                                      <th>MST CN</th>
                                      <th>Ngày cấp</th>
                                      <th>Nơi cấp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-nowrap">
                                            <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Cập nhật"> <i class="fa fa-edit"></i> </button>
                                            <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Xóa"> <i class="fa fa-trash-o"></i> </button>
                                        </td>
                                        <td style="width:100px;">KH00001</td>
                                        <td>Trần Văn Trụi</td>
                                        <td>Nam</td>
                                        <td>22/02/1985</td>
                                        <td>Võ Văn Tần, Cần Thơ</td>
                                        <td>363809876</td>
                                        <td>22/02/2002</td>
                                        <td>Cần Thơ</td>
                                        <td class="hidden-text" style="width:400px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                        <td class="hidden-text" style="width:400px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                        <td>0993293232</td>
                                        <td>0993293239</td>
                                        <td>0993293232</td>
                                        <td>Prohaska</td>
                                        <td>Prohaska</td>
                                        <td class="hidden-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                           but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Cập nhật"> <i class="fa fa-edit"></i> </button>
                                            <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Xóa"> <i class="fa fa-trash-o"></i> </button>
                                        </td>
                                        <td style="width:100px;">KH00001</td>
                                        <td>Trần Văn Trụi</td>
                                        <td>Nam</td>
                                        <td>22/02/1985</td>
                                        <td>Võ Văn Tần, Cần Thơ</td>
                                        <td>363809876</td>
                                        <td>22/02/2002</td>
                                        <td>Cần Thơ</td>
                                        <td class="hidden-text" style="width:400px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                        <td class="hidden-text" style="width:400px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                        <td>0993293232</td>
                                        <td>0993293239</td>
                                        <td>0993293232</td>
                                        <td>Prohaska</td>
                                        <td>Prohaska</td>
                                        <td class="hidden-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                           but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Cập nhật"> <i class="fa fa-edit"></i> </button>
                                            <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Xóa"> <i class="fa fa-trash-o"></i> </button>
                                        </td>
                                        <td style="width:100px;">KH00001</td>
                                        <td>Trần Văn Trụi</td>
                                        <td>Nam</td>
                                        <td>22/02/1985</td>
                                        <td>Võ Văn Tần, Cần Thơ</td>
                                        <td>363809876</td>
                                        <td>22/02/2002</td>
                                        <td>Cần Thơ</td>
                                        <td class="hidden-text" style="width:400px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                        <td class="hidden-text" style="width:400px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                        <td>0993293232</td>
                                        <td>0993293239</td>
                                        <td>0993293232</td>
                                        <td>Prohaska</td>
                                        <td>Prohaska</td>
                                        <td class="hidden-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                           but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Cập nhật"> <i class="fa fa-edit"></i> </button>
                                            <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Xóa"> <i class="fa fa-trash-o"></i> </button>
                                        </td>
                                        <td style="width:100px;">KH00001</td>
                                        <td>Trần Văn Trụi</td>
                                        <td>Nam</td>
                                        <td>22/02/1985</td>
                                        <td>Võ Văn Tần, Cần Thơ</td>
                                        <td>363809876</td>
                                        <td>22/02/2002</td>
                                        <td>Cần Thơ</td>
                                        <td class="hidden-text" style="width:400px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                        <td class="hidden-text" style="width:400px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                        <td>0993293232</td>
                                        <td>0993293239</td>
                                        <td>0993293232</td>
                                        <td>Prohaska</td>
                                        <td>Prohaska</td>
                                        <td class="hidden-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                           but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Cập nhật"> <i class="fa fa-edit"></i> </button>
                                            <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Xóa"> <i class="fa fa-trash-o"></i> </button>
                                        </td>
                                        <td style="width:100px;">KH00001</td>
                                        <td>Trần Văn Trụi</td>
                                        <td>Nam</td>
                                        <td>22/02/1985</td>
                                        <td>Võ Văn Tần, Cần Thơ</td>
                                        <td>363809876</td>
                                        <td>22/02/2002</td>
                                        <td>Cần Thơ</td>
                                        <td class="hidden-text" style="width:400px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                        <td class="hidden-text" style="width:400px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                        <td>0993293232</td>
                                        <td>0993293239</td>
                                        <td>0993293232</td>
                                        <td>Prohaska</td>
                                        <td>Prohaska</td>
                                        <td class="hidden-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                           but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Cập nhật"> <i class="fa fa-edit"></i> </button>
                                            <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Xóa"> <i class="fa fa-trash-o"></i> </button>
                                        </td>
                                        <td style="width:100px;">KH00001</td>
                                        <td>Trần Văn Trụi</td>
                                        <td>Nam</td>
                                        <td>22/02/1985</td>
                                        <td>Võ Văn Tần, Cần Thơ</td>
                                        <td>363809876</td>
                                        <td>22/02/2002</td>
                                        <td>Cần Thơ</td>
                                        <td class="hidden-text" style="width:400px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                        <td class="hidden-text" style="width:400px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                        <td>0993293232</td>
                                        <td>0993293239</td>
                                        <td>0993293232</td>
                                        <td>Prohaska</td>
                                        <td>Prohaska</td>
                                        <td class="hidden-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                           but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Cập nhật"> <i class="fa fa-edit"></i> </button>
                                            <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Xóa"> <i class="fa fa-trash-o"></i> </button>
                                        </td>
                                        <td style="width:100px;">KH00001</td>
                                        <td>Trần Văn Trụi</td>
                                        <td>Nam</td>
                                        <td>22/02/1985</td>
                                        <td>Võ Văn Tần, Cần Thơ</td>
                                        <td>363809876</td>
                                        <td>22/02/2002</td>
                                        <td>Cần Thơ</td>
                                        <td class="hidden-text" style="width:400px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                        <td class="hidden-text" style="width:400px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                        <td>0993293232</td>
                                        <td>0993293239</td>
                                        <td>0993293232</td>
                                        <td>Prohaska</td>
                                        <td>Prohaska</td>
                                        <td class="hidden-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                           but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <el-pagination
                              :page-size="20"
                              :pager-count="8"
                              layout="prev, pager, next"
                              :total="1000">
                            </el-pagination>
                        </div>
                    </div>
                </div>
              </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->

      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
  </div>
</template>

<script>
    export default {
      name: 'danhsachnhanvien'
    }
</script>

<style media="screen" scoped>
  .m-t-40 {
    margin-top: 0px !important;
  }
  #timkiem{
    width: 100%;
    position: relative;
    padding-right: 87px;
    font-size: 13px;
  }

  .btntimkiem{
    position: absolute;
    top: 3px;
    right: 18px;
    height: 37px;
    font-size: 13px;
    height: 32px;
    padding: 5px 13px;
  }

</style>
