@extends ('partial.main')

@section('container')


<!-- Modal -->
<div
  data-te-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none "
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div data-te-modal-dialog-ref
    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
    <div
      class="p-6 min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <!--Modal title-->
        <h3 class="font-bold text-lg">Tambah Cuti Karyawan</h3>
        <!--Close button-->
        <button
          type="button"
          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
          data-te-modal-dismiss
          aria-label="Close">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!--Modal body-->
      <form action="/cuti/post" method="post"> 
      @csrf
      <p class="py-4 text-sm">Nomor Induk</p>
      <select name ="Nomor_Induk" class="select select-bordered w-full max-w-xs min-w-lg">
        <option disabled selected>Pilih Nomor Induk</option>
        @foreach($data_karyawan as $item)
        <option>{{ $item->Nomor_Induk }}</option>
        @endforeach
      </select>
      <p class="py-4 text-sm">Lama Cuti</p>
      <input name="Lama_Cuti" type="number" placeholder="Ketik Disini.." class="input input-bordered w-full textarea-sm max-w-xs" />
      <p class="py-4 text-sm">Keterangan</p>
      <input name="Keterangan"type="text" placeholder="Ketik Disini.." class="input input-bordered w-full textarea-sm max-w-xs" />
      
      <p class="py-4 text-sm">Tanggal Cuti</p>
        <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
        <div
        class="relative"
        data-te-datepicker-init
        data-te-input-wrapper-init>
        <input
            name="Tanggal_Cuti"
            type="text"
            class="peer block min-h-[auto] w-max rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
            placeholder="Select a date" />
        <label
            for="floatingInput"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
            >Pilih Tanggal</label
        >
        </div>
        <div class="modal-action">
        </div>

      <!--Modal footer-->
      <div
        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 pt-2 dark:border-opacity-50">
        <button
          type="button"
          class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
          data-te-modal-dismiss
          data-te-ripple-init
          data-te-ripple-color="light">
          Tutup
        </button>
        <button
          type="submit"
          class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
          data-te-ripple-init
          data-te-ripple-color="light">
          Simpan
        </button>
      </form>
      </div>
    </div>
  </div>
</div>

<section id="karyawan_semua">
    <div class="flex justify-between">
        <p class="text-sm font-bold">
            Daftar Cuti Karyawan
        </p>
        <button class="btn btn-sm btn-primary" data-te-toggle="modal" data-te-target="#exampleModal">Tambah</button>
    </div>
<?php
  $i = 1
?>
    <div class="p-4">
        <div class="overflow-x-auto">
            <table class="table table-md">
              <thead>
                <tr>
                    <th>No</th> 
                    <th>Nomor Induk</th> 
                    <th>Nama</th> 
                    <th>Tanggal Cuti</th> 
                    <th>Lama Cuti</th> 
                    <th>Keterangan</th> 
                </tr>
              </thead> 
              <tbody>
                @foreach($data_cuti_karyawan as $item)
                <tr>
                    <td>{{ $i }}</td> 
                    <td>{{ $item->Nomor_Induk }}</td> 
                    <td>{{ $item->Karyawan->Nama }}</td> 
                    <td>{{ $item->Tanggal_Cuti }}</td> 
                    <td>{{ $item->Lama_Cuti }}</td> 
                    <td>{{ $item->Keterangan }}</td> 
                </tr>
                <?php
                  $i++
                ?>
                @endforeach           
              </tbody> 
              <tfoot>
              </tfoot>
            </table>
          </div>
    </div>
</section>

<section id="karyawan_pertama">
    <p class="text-sm font-bold">
        Sisa Cuti Karyawan 
    </p>
    <?php
      $i = 1
    ?>
    <div class="p-4">
        <div class="overflow-x-auto">
            <table class="table table-md">
              <thead>
                <tr>
                    <th>No</th> 
                    <th>Nomor Induk</th> 
                    <th>Nama</th> 
                    <th>Sisa Cuti</th> 
                </tr>
              </thead> 
              <tbody>
                @foreach($sisa_cuti_karyawan as $item)
                <tr>
                  <th>{{ $i }}</th> 
                  <td>{{ $item["Nomor_Induk"] }}</td> 
                  <td>{{ $item["Nama"] }}</td> 
                  <td class="text-red-900">{{ $item["Sisa_Cuti"] }} Hari</td> 
                </tr>
                <?php
                  $i++
                ?>
                @endforeach
              </tbody> 
              <tfoot>
              </tfoot>
            </table>
          </div>
    </div>
</section>


@endsection