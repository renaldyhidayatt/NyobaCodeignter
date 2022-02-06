<div class="card shadow mb-4">
  <div class="card-header d-flex align-items-center justify-content-between py-3">
    <h6 class="m-0 font-weight-bold text-primary">General Summary of Loans</h6>
    <a class="d-sm-inline-block btn btn-sm btn-success shadow-sm" href="#" onclick="imp_credits(imp1);"><i class="fas fa-print fa-sm"></i> Print</a>
  </div>
  <div class="card-body">

    <div class="form-row">
      <div class="form-group col-4">

        <label class="small mb-1" for="exampleFormControlSelect2">Tipo de moneda</label>
        <select class="form-control" id="coin_type" name="coin_type">
          <option value="0"> Select currency</option>
          <?php foreach ($coins as $c): ?>
            <option value="<?php echo $c->id ?>" data-symbol="<?php echo $c->short_name ?>"><?php echo $c->name.' ('.strtoupper($c->short_name).')' ?></option>
          <?php endforeach ?>
        </select>
      </div>
    </div>

    <div class="table-responsive" id="imp1">
      <table class="table" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th>Description</th>
            <th class="text-right">Quantity</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Total Credit</td>
            <td class="text-right" id="cr">0</td>
          </tr>
          <tr>
            <td>Total Credit with Interest</td>
            <td class="text-right" id="cr_interest">0</td>
          </tr>
          <tr>
            <td>Total Credit canceled with interest</td>
            <td class="text-right" id="cr_interestPaid">0</td>
          </tr>
          <tr>
            <td>Total Credit receivable with interest</td>
            <td class="text-right" id="cr_interestPay">0</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>