<div class="sidebar" data-color="green" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!-- Sidebar -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            Admin
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ request()->is('penjualan') ? ' active' : ''}}">
                <a class="nav-link" href="{{ url('/penjualan') }}">
                    <i class="material-icons">store</i>
                    <p>Penjualan</p>
                </a>
            </li>
            <li class="nav-item{{ request()->is('pembelian') ? ' active' : ''}}">
                <a class="nav-link" href="{{ url('/pembelian') }}">
                    <i class="material-icons">receipt</i>
                    <p>Pembelian</p>
                </a>
            </li>
            <li class="nav-item{{ request()->is('barang') ? ' active' : '' }}">
                <a class="nav-link" href="{{ url('/barang') }}">
                    <i class="material-icons">widgets</i>
                    <p>Barang</p>
                </a>
            </li>
            <li class="nav-item{{ request()->is('jenis') ? ' active' : '' }}">
                <a class="nav-link" href="{{ url('/jenis') }}">
                    <i class="material-icons">category</i>
                    <p>Jenis</p>
                </a>
            </li>
            <li class="nav-item{{ request()->is('satuan') ? ' active' : '' }}">
                <a class="nav-link" href="{{ url('/satuan') }}">
                    <i class="material-icons">device_hub</i>
                    <p>Satuan</p>
                </a>
            </li>
            <li class="nav-item{{ request()->is('stok') ? ' active' : ''}}">
                <a class="nav-link" href="{{ url('/stok') }}">
                    <i class="material-icons">inventory_2</i>
                    <p>Minim Stok</p>
                </a>
            </li>
            <li class="nav-item{{ request()->is('report') ? ' active' : ''}}">
                <a class="nav-link" href="{{ url('/report') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Report</p>
                </a>
            </li>
            <li class="nav-item{{ request()->is('lainnya') ? ' active' : '' }}">
                <a class="nav-link" href="{{ url('/lainnya') }}">
                    <i class="material-icons">filter_9_plus</i>
                    <p>Lainnya</p>
                </a>
            </li>
        </ul>
    </div>
</div>