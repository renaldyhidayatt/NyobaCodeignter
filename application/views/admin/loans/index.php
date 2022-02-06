<div class="card shadow mb-4">
  <div class="card-header d-flex align-items-center justify-content-between py-3">
    <h6 class="m-0 font-weight-bold text-primary">List Loans</h6>
    <a class="d-sm-inline-block btn btn-sm btn-success shadow-sm" href="<?php echo site_url('admin/loans/edit'); ?>"><i class="fas fa-plus-circle fa-sm"></i> Nuevo prestamo</a>
  </div>
  <div class="card-body">
    <?php if ($this->session->flashdata('msg')): ?>
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <?= $this->session->flashdata('msg') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif ?>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Loan No.</th>
            <th>client</th>
            <th>Credit amount</th>
            <th>Interest amount</th>
            <th>Total amount</th>
            <th>T. currency</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php if(count($loans)): foreach($loans as $loan): ?>
            <tr>
              <td><?php echo $loan->id ?></td>
              <td><?php echo $loan->customer ?></td>
              <td><?php echo $loan->credit_amount ?></td>
              <td>
                <?php
                  $interest_amount = number_format($loan->credit_amount * ($loan->interest_amount/100), 2);
                  echo $interest_amount;
                ?>
              </td>
              <td><?php echo $loan->credit_amount + $interest_amount ?></td>
              <td style="text-transform:uppercase;"><?php echo $loan->short_name ?></td>
              <td>
                <button type="button" class="btn btn-sm <?php echo $loan->status ? 'btn-outline-danger': 'btn-outline-success' ?> status-check"><?php echo $loan->status ? 'Pendiente': 'Pagado' ?></button>
              </td>
              <td>
                <a href="<?php echo site_url('admin/loans/view/'.$loan->id); ?>" class="btn btn-sm btn-secondary shadow-sm" data-toggle="ajax-modal"><i class="fas fa-eye fa-sm"></i> Ver pagos</a>
              </td>
            </tr>
          <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="8" class="text-center">There are no Loans, add a new loan.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"></div>