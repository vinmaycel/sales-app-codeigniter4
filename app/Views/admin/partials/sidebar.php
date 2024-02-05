<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Sales App</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-item <?= url_is('admin') ? 'active' : null ?>">
						<a class="sidebar-link" href="<?= base_url('/admin'); ?>">
						<i class="align-middle" data-feather="sliders"></i>
						<span class="align-middle">Dashboard</span>
					</a>
					</li>
            			</a>
					</li>

					<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.html">
              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-up.html">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
            </a>
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="pages-blank.html">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
            </a>
					</li> -->

					<li class="sidebar-header">
						Data
					</li>

					<li class="sidebar-item <?= url_is('/admin/category*') ? 'active' : null ?>">
						<a class="sidebar-link" href="<?= base_url('/admin/category'); ?>">
              		<i class="align-middle" data-feather="book"></i> <span class="align-middle">Category</span>
            			</a>
					</li>

					<li class="sidebar-item <?= url_is('/admin/product*') ? 'active' : null ?>">
						<a class="sidebar-link" href="<?= base_url('/admin/product'); ?>">
              		<i class="align-middle" data-feather="server"></i> <span class="align-middle">Product</span>
            			</a>
					</li>

					<li class="sidebar-item <?= url_is('/admin/trx*') ? 'active' : null ?>">
						<a class="sidebar-link" href="<?= base_url('/admin/trx'); ?>">
              		<i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Sales</span>
            			</a>
					</li>
					<li class="sidebar-item <?= url_is('/admin/test') ? 'active' : null ?>">
						<a class="sidebar-link" href="<?= base_url('/admin/test'); ?>">
              		<i class="align-middle" data-feather="list"></i> <span class="align-middle">Test</span>
            			</a>
					</li>


					<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="ui-typography.html">
              <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="icons-feather.html">
              <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
            </a>
					</li>

					<li class="sidebar-header">
						Plugins & Addons
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="charts-chartjs.html">
              <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="maps-google.html">
              <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
            </a>
					</li>
				</ul> -->

				<!-- <div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Upgrade to Pro</strong>
						<div class="mb-3 text-sm">
							Are you looking for more components? Check out our premium version.
						</div>
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
						</div>
					</div>
				</div> -->
			</div>
		</nav>
