<div class="container mt-3">
<?php if(validation_errors()): ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <?=validation_errors();?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<?php if($this->session->flashdata('flash')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?= $this->session->flashdata('flash'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<div class="row justify-content-md-center p-3">
<div class="card" style="width: 38rem;">
  <div class="card-header">
    Login Form
  </div>
  <div class="card-body">
  <form action="" method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input class="form-control" placeholder="Enter username" name="username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="password">
  </div>
  <small class="text-muted">
  Need an account?<a href="<?php base_url(); ?>auth/signup" class="btn-sm btn-link text-dark"><strong>Sign up for one now.</strong> </a>
    </small>
  <button type="submit" class="btn btn-dark float-right">Login</button>
</form>
  </div>
</div>
</div>
</div>