## Artisan

php artisan migrate:fresh --seed

## API

GET/employee
Menampilkan seluruh employee

GET/employee/id
Menampilkan salah satu employee berdasarkan id

POST/employee
Membuat Employee Baru

> "name" = "masukkan_nama"
> "gaji" = 1500000

GET/setting
Menampilkan settingan yang dipakai

PATCH/setting
Memperbarui settingan berdasarkan key

> "key" = 1

GET/overtime
Menampilkan semua data overtime

POST/overtime
Membuat data overtime baru

> "employee_id" = 1
> "time_start" = "18:00:00"
> "time_end" = "20:00:00"

GET/overtime-pay/{id}
Menampilkan hasil perhitungan salary salah satu overtime
