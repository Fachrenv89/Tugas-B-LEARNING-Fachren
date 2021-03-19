# Cetak Bilangan pada ganjil dan genap 1-100

### Perulangan dengan for loop yang dimulai dari angka 1 sampai 100
```php
for ($no = 1; $no <= 100; ++$no){ 
    ...
}
``` 

### Melakukan pengecekan apakah angka itu habis dibagi dua atau tidak, kalau habis dibagi dua maka akan menampilkan pesan *Kalau yang ini bilangan genap*
```php
if ($no % 2 == 0) {
    echo "$no = ";
    echo "<font style='color:;'>
    Kalau yang ini bilangan genap</font><br>";
        }
```

### Melakukan pengecekan apakah angka itu habis dibagi dua atau tidak, kalau tidak habis dibagi dua maka akan menampilkan pesan *Kalau yang ini bilangan ganjil*
```php
else {
    echo "$no = ";
    echo "<font style='color:blue;'>
    Ini bilangan ganjil</font><br>";
        }
```

