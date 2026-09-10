@extends('admin')

@section('title', 'Data Departemen')

@section('page-title', 'Data Departemen')

@section('content')

<style>
    /* =========================
       PAGE HEADER
    ========================== */

    .page-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 25px;
    }

    .page-header-left h2 {
        font-size: 22px;
        font-weight: 700;
        color: #111827;
        margin-bottom: 5px;
    }

    .page-header-left p {
        font-size: 13px;
        color: #94a3b8;
    }


    /* =========================
       BUTTON
    ========================== */

    .btn-primary {
        display: inline-flex;
        align-items: center;
        gap: 8px;

        padding: 10px 16px;

        background: #2563eb;
        color: white;

        border: none;
        border-radius: 8px;

        font-size: 13px;
        font-weight: 600;

        cursor: pointer;
        text-decoration: none;

        transition: 0.2s;
    }

    .btn-primary:hover {
        background: #1d4ed8;
    }

    .btn-primary svg {
        width: 17px;
        height: 17px;
    }


    /* =========================
       CARD
    ========================== */

    .data-card {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        overflow: hidden;
    }


    /* =========================
       CARD HEADER
    ========================== */

    .data-card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;

        padding: 18px 22px;

        border-bottom: 1px solid #e5e7eb;
    }

    .data-card-title {
        font-size: 15px;
        font-weight: 650;
        color: #1f2937;
    }

    .data-card-count {
        font-size: 12px;
        color: #94a3b8;
    }


    /* =========================
       SEARCH
    ========================== */

    .search-box {
        position: relative;
    }

    .search-box input {
        width: 230px;

        padding: 9px 12px 9px 36px;

        border: 1px solid #e2e8f0;
        border-radius: 8px;

        outline: none;

        font-size: 12px;
        color: #334155;

        transition: 0.2s;
    }

    .search-box input:focus {
        border-color: #93c5fd;
        box-shadow: 0 0 0 3px #eff6ff;
    }

    .search-icon {
        position: absolute;

        left: 11px;
        top: 50%;

        transform: translateY(-50%);

        color: #94a3b8;
    }

    .search-icon svg {
        width: 15px;
        height: 15px;
    }


    /* =========================
       TABLE
    ========================== */

    .table-wrapper {
        width: 100%;
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead {
        background: #f8fafc;
    }

    th {
        padding: 13px 22px;

        text-align: left;

        font-size: 11px;
        font-weight: 700;

        color: #64748b;

        text-transform: uppercase;
        letter-spacing: 0.04em;

        white-space: nowrap;
    }

    td {
        padding: 15px 22px;

        border-top: 1px solid #f1f5f9;

        font-size: 13px;
        color: #475569;

        white-space: nowrap;
    }

    tbody tr {
        transition: 0.15s;
    }

    tbody tr:hover {
        background: #f8fafc;
    }


    /* =========================
       DEPARTMENT NAME
    ========================== */

    .department-name {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .department-icon {
        width: 38px;
        height: 38px;

        border-radius: 9px;

        background: #eff6ff;
        color: #2563eb;

        display: flex;
        align-items: center;
        justify-content: center;

        flex-shrink: 0;
    }

    .department-icon svg {
        width: 19px;
        height: 19px;
    }

    .department-info {
        display: flex;
        flex-direction: column;
        gap: 3px;
    }

    .department-title {
        font-weight: 650;
        color: #1f2937;
    }

    .department-description {
        font-size: 11px;
        color: #94a3b8;
    }


    /* =========================
       STATUS
    ========================== */

    .status {
        display: inline-flex;
        align-items: center;
        gap: 6px;

        padding: 5px 9px;

        border-radius: 999px;

        font-size: 11px;
        font-weight: 600;
    }

    .status-active {
        background: #ecfdf5;
        color: #059669;
    }

    .status-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: currentColor;
    }


    /* =========================
       ACTION BUTTON
    ========================== */

    .actions {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .action-btn {
        width: 32px;
        height: 32px;

        display: flex;
        align-items: center;
        justify-content: center;

        border: 1px solid #e5e7eb;
        border-radius: 7px;

        background: white;

        color: #64748b;

        cursor: pointer;

        transition: 0.2s;
    }

    .action-btn:hover {
        background: #f8fafc;
        color: #2563eb;
        border-color: #bfdbfe;
    }

    .action-btn.delete:hover {
        color: #dc2626;
        border-color: #fecaca;
        background: #fef2f2;
    }

    .action-btn svg {
        width: 15px;
        height: 15px;
    }


    /* =========================
       TABLE FOOTER
    ========================== */

    .table-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;

        padding: 15px 22px;

        border-top: 1px solid #e5e7eb;
    }

    .table-info {
        font-size: 11px;
        color: #94a3b8;
    }

    .pagination {
        display: flex;
        gap: 5px;
    }

    .page-btn {
        width: 30px;
        height: 30px;

        display: flex;
        align-items: center;
        justify-content: center;

        border: 1px solid #e5e7eb;
        border-radius: 6px;

        background: white;
        color: #64748b;

        font-size: 11px;

        cursor: pointer;
    }

    .page-btn.active {
        background: #2563eb;
        color: white;
        border-color: #2563eb;
    }


    /* =========================
       RESPONSIVE
    ========================== */

    @media (max-width: 700px) {

        .page-header {
            align-items: flex-start;
            gap: 15px;
            flex-direction: column;
        }

        .search-box input {
            width: 180px;
        }

        .data-card-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
        }

        .table-footer {
            flex-direction: column;
            gap: 12px;
            align-items: flex-start;
        }
    }
</style>


{{-- =========================
     PAGE HEADER
========================== --}}

<div class="page-header">

    <div class="page-header-left">

        <h2>
            Data Departemen
        </h2>

        <p>
            Kelola data departemen pelayanan AOG GMS Bandung.
        </p>

    </div>


    <button class="btn-primary" onclick="openModal()">

        <svg fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor"
             stroke-width="2">

            <path stroke-linecap="round"
                  d="M12 5v14"/>

            <path stroke-linecap="round"
                  d="M5 12h14"/>

        </svg>

        Tambah Departemen

    </button>

</div>


{{-- =========================
     DATA CARD
========================== --}}

<div class="data-card">

    {{-- CARD HEADER --}}
    <div class="data-card-header">

        <div>

            <div class="data-card-title">
                Daftar Departemen
            </div>

            <div class="data-card-count">
                12 departemen
            </div>

        </div>


        {{-- SEARCH --}}
        <div class="search-box">

            <span class="search-icon">

                <svg fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor"
                     stroke-width="2">

                    <circle cx="11"
                            cy="11"
                            r="7"/>

                    <path stroke-linecap="round"
                          d="m20 20-4-4"/>

                </svg>

            </span>

            <input
                type="text"
                id="searchInput"
                placeholder="Cari departemen..."
                onkeyup="searchDepartment()"
            >

        </div>

    </div>


    {{-- TABLE --}}
    <div class="table-wrapper">

        <table>

            <thead>

                <tr>

                    <th>
                        No
                    </th>

                    <th>
                        Departemen
                    </th>

                    <th>
                        PIC
                    </th>

                    <th>
                        Jumlah Pelayan
                    </th>

                    <th>
                        Status
                    </th>

                    <th>
                        Aksi
                    </th>

                </tr>

            </thead>


            <tbody id="departmentTable">

                {{-- 1 --}}
                <tr>

                    <td>
                        1
                    </td>

                    <td>

                        <div class="department-name">

                            <div class="department-icon">

                                <svg fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="1.8">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M9 18V5l12-2v13"/>

                                    <circle cx="6"
                                            cy="18"
                                            r="3"/>

                                    <circle cx="18"
                                            cy="16"
                                            r="3"/>

                                </svg>

                            </div>

                            <div class="department-info">

                                <span class="department-title">
                                    Praise and Worship
                                </span>

                                <span class="department-description">
                                    Pelayanan musik dan pujian
                                </span>

                            </div>

                        </div>

                    </td>

                    <td>
                        -
                    </td>

                    <td>
                        0
                    </td>

                    <td>

                        <span class="status status-active">

                            <span class="status-dot"></span>

                            Aktif

                        </span>

                    </td>

                    <td>

                        <div class="actions">

                            <button class="action-btn"
                                    title="Edit"
                                    onclick="editDepartment('Praise and Worship')">

                                <svg fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="1.8">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="m16.862 3.487 3.651 3.651M4 20h4l10.5-10.5a2.121 2.121 0 0 0-3-3L5 17v3z"/>

                                </svg>

                            </button>


                            <button class="action-btn delete"
                                    title="Hapus"
                                    onclick="deleteDepartment('Praise and Worship')">

                                <svg fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="1.8">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M4 7h16"/>

                                    <path stroke-linecap="round"
                                          d="M10 11v6M14 11v6"/>

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M6 7l1 13h10l1-13M9 7V4h6v3"/>

                                </svg>

                            </button>

                        </div>

                    </td>

                </tr>


                {{-- 2 --}}
                <tr>

                    <td>
                        2
                    </td>

                    <td>

                        <div class="department-name">

                            <div class="department-icon">
                                👋
                            </div>

                            <div class="department-info">

                                <span class="department-title">
                                    Communication
                                </span>

                                <span class="department-description">
                                    Pelayanan komunikasi
                                </span>

                            </div>

                        </div>

                    </td>

                    <td>
                        -
                    </td>

                    <td>
                        0
                    </td>

                    <td>

                        <span class="status status-active">

                            <span class="status-dot"></span>

                            Aktif

                        </span>

                    </td>

                    <td>

                        <div class="actions">

                            <button class="action-btn"
                                    title="Edit">

                                ✎

                            </button>

                            <button class="action-btn delete"
                                    title="Hapus">

                                🗑

                            </button>

                        </div>

                    </td>

                </tr>


                {{-- 3 --}}
                <tr>

                    <td>
                        3
                    </td>

                    <td>

                        <div class="department-name">

                            <div class="department-icon">
                                🎥
                            </div>

                            <div class="department-info">

                                <span class="department-title">
                                    Multimedia
                                </span>

                                <span class="department-description">
                                    Dokumentasi dan multimedia
                                </span>

                            </div>

                        </div>

                    </td>

                    <td>
                        -
                    </td>

                    <td>
                        0
                    </td>

                    <td>

                        <span class="status status-active">

                            <span class="status-dot"></span>

                            Aktif

                        </span>

                    </td>

                    <td>

                        <div class="actions">

                            <button class="action-btn">
                                ✎
                            </button>

                            <button class="action-btn delete">
                                🗑
                            </button>

                        </div>

                    </td>

                </tr>


                {{-- 4 --}}
                <tr>

                    <td>
                        4
                    </td>

                    <td>

                        <div class="department-name">

                            <div class="department-icon">
                                👥
                            </div>

                            <div class="department-info">

                                <span class="department-title">
                                    Crowd
                                </span>

                                <span class="department-description">
                                    Pelayanan crowd
                                </span>

                            </div>

                        </div>

                    </td>

                    <td>
                        -
                    </td>

                    <td>
                        0
                    </td>

                    <td>

                        <span class="status status-active">

                            <span class="status-dot"></span>

                            Aktif

                        </span>

                    </td>

                    <td>

                        <div class="actions">

                            <button class="action-btn">
                                ✎
                            </button>

                            <button class="action-btn delete">
                                🗑
                            </button>

                        </div>

                    </td>

                </tr>


                {{-- 5 --}}
                <tr>

                    <td>
                        5
                    </td>

                    <td>

                        <div class="department-name">

                            <div class="department-icon">
                                📚
                            </div>

                            <div class="department-info">

                                <span class="department-title">
                                    Education
                                </span>

                                <span class="department-description">
                                    Pelayanan edukasi
                                </span>

                            </div>

                        </div>

                    </td>

                    <td>
                        -
                    </td>

                    <td>
                        0
                    </td>

                    <td>

                        <span class="status status-active">

                            <span class="status-dot"></span>

                            Aktif

                        </span>

                    </td>

                    <td>

                        <div class="actions">

                            <button class="action-btn">
                                ✎
                            </button>

                            <button class="action-btn delete">
                                🗑
                            </button>

                        </div>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>


    {{-- FOOTER --}}
    <div class="table-footer">

        <div class="table-info">
            Menampilkan 1–5 dari 12 departemen
        </div>

        <div class="pagination">

            <button class="page-btn">
                ‹
            </button>

            <button class="page-btn active">
                1
            </button>

            <button class="page-btn">
                2
            </button>

            <button class="page-btn">
                3
            </button>

            <button class="page-btn">
                ›
            </button>

        </div>

    </div>

</div>


{{-- =========================
     MODAL TAMBAH DEPARTEMEN
========================== --}}

<div id="departmentModal"
     style="
        display:none;
        position:fixed;
        inset:0;
        background:rgba(15,23,42,0.45);
        z-index:999;
        align-items:center;
        justify-content:center;
     ">

    <div style="
        width:450px;
        max-width:90%;
        background:white;
        border-radius:14px;
        padding:25px;
        box-shadow:0 20px 50px rgba(0,0,0,0.15);
    ">

        <div style="
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:20px;
        ">

            <div>

                <h3 style="
                    font-size:18px;
                    color:#111827;
                    margin-bottom:4px;
                ">
                    Tambah Departemen
                </h3>

                <p style="
                    font-size:12px;
                    color:#94a3b8;
                ">
                    Masukkan informasi departemen baru.
                </p>

            </div>


            <button onclick="closeModal()"
                    style="
                        border:none;
                        background:none;
                        font-size:22px;
                        color:#94a3b8;
                        cursor:pointer;
                    ">
                ×
            </button>

        </div>


        <form onsubmit="saveDepartment(event)">

            <div style="margin-bottom:16px;">

                <label style="
                    display:block;
                    font-size:12px;
                    font-weight:600;
                    color:#475569;
                    margin-bottom:7px;
                ">
                    Nama Departemen
                </label>

                <input
                    type="text"
                    id="departmentName"
                    placeholder="Contoh: Sound"
                    required
                    style="
                        width:100%;
                        padding:11px 12px;
                        border:1px solid #e2e8f0;
                        border-radius:8px;
                        outline:none;
                        font-size:13px;
                    "
                >

            </div>


            <div style="margin-bottom:20px;">

                <label style="
                    display:block;
                    font-size:12px;
                    font-weight:600;
                    color:#475569;
                    margin-bottom:7px;
                ">
                    Deskripsi
                </label>

                <textarea
                    id="departmentDescription"
                    rows="3"
                    placeholder="Deskripsi singkat departemen..."
                    style="
                        width:100%;
                        padding:11px 12px;
                        border:1px solid #e2e8f0;
                        border-radius:8px;
                        outline:none;
                        font-size:13px;
                        resize:none;
                    "
                ></textarea>

            </div>


            <div style="
                display:flex;
                justify-content:flex-end;
                gap:8px;
            ">

                <button
                    type="button"
                    onclick="closeModal()"
                    style="
                        padding:10px 15px;
                        border:1px solid #e2e8f0;
                        background:white;
                        color:#64748b;
                        border-radius:8px;
                        cursor:pointer;
                        font-size:12px;
                        font-weight:600;
                    ">
                    Batal
                </button>


                <button
                    type="submit"
                    class="btn-primary">
                    Simpan
                </button>

            </div>

        </form>

    </div>

</div>


<script>

    /* =========================
       MODAL
    ========================== */

    function openModal() {

        document.getElementById('departmentModal').style.display = 'flex';

    }


    function closeModal() {

        document.getElementById('departmentModal').style.display = 'none';

    }


    /* =========================
       SAVE DUMMY
    ========================== */

    function saveDepartment(event) {

        event.preventDefault();

        const name =
            document.getElementById('departmentName').value;

        alert(
            'Departemen "' + name + '" berhasil ditambahkan (dummy).'
        );

        closeModal();

    }


    /* =========================
       SEARCH
    ========================== */

    function searchDepartment() {

        const input =
            document.getElementById('searchInput');

        const filter =
            input.value.toLowerCase();

        const rows =
            document.querySelectorAll(
                '#departmentTable tr'
            );

        rows.forEach(function(row) {

            const text =
                row.innerText.toLowerCase();

            if (text.includes(filter)) {

                row.style.display = '';

            } else {

                row.style.display = 'none';

            }

        });

    }


    /* =========================
       EDIT
    ========================== */

    function editDepartment(name) {

        alert(
            'Fitur edit "' + name + '" akan kita hubungkan ke database nanti.'
        );

    }


    /* =========================
       DELETE
    ========================== */

    function deleteDepartment(name) {

        const confirmDelete =
            confirm(
                'Apakah kamu yakin ingin menghapus departemen "' +
                name +
                '"?'
            );

        if (confirmDelete) {

            alert(
                'Departemen "' +
                name +
                '" akan dihapus setelah database aktif.'
            );

        }

    }

</script>

@endsection