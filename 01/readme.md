# Latihan ngoding menggunakan berbagai bahasa pemrograman

## Latihan 1
### 1-1 IF-ELSE
![Latihan 1-1](/01/pictures/latihan-01-todo1.png)
### 1-2. **Buatlah variabel firstName, lastName, age, isMarried dengan ketentuan:**
    - firstName: bertipe data string, dengan nilai nama depan Anda.
    - lastName: bertipe data string, dengan nilai nama belakang Anda.
    - age: bertipe data number, dengan nilai umur Anda.
    - isMarried: bertipe data boolean, dengan bebas Anda tentukan.

### 1-3. Buatlah logika if untuk mengevaluasi nilai score dengan ketentuan:
    - Jika score bernilai 90 atau lebih
        - Isi variabel result dengan nilai: 'Selamat! Anda mendapatkan nilai A.'
    - Jika score bernilai 80 atau hingga 89
        - Isi variabel result dengan nilai: 'Anda mendapatkan nilai B.'
    - Jika score bernilai 70 atau hingga 79
        - Isi variabel result dengan nilai: 'Anda mendapatkan nilai C.'
    - Jika score bernilai 60 atau hingga 69
        - Isi variabel result dengan nilai: 'Anda mendapatkan nilai D.'
    - Jika score bernilai di bawah 60
        - Isi variabel result dengan nilai: 'Anda mendapatkan nilai E.


## Latihan 2
### 2-1 Object
    A. Buatlah variabel dengan nama restaurant yang bertipe object dengan ketentuan berikut:
    - Memiliki properti bernama "name"
        - Bertipe data string
        - Bernilai apa pun, asalkan tidak string kosong atau null.
    - Memiliki properti bernama "city"
        - Bertipe data string
        - Bernilai apa pun, asalkan tidak string kosong atau null.
    - Memiliki properti "favorite drink"
        - Bertipe data string
        - Bernilai apa pun, asalkan tidak string kosong atau null.
    - Memiliki properti "favorite food"
        - Bertipe data string
        - Bernilai apa pun, asalkan tidak string kosong atau null.
    - Memiliki properti "isVegan"
        - Bertipe data boolean
        - Bernilai boolean apa pun.
    
    B. Buatlah variabel bernama name.
    Kemudian isi dengan nilai name dari properti object restaurant

    C. Buatlah variabel bernama favoriteDrink.
    Kemudian isi dengan nilai "favorite drink" dari properti object restaurant

### 2-2 Array
    Buatlah sebuah variabel dengan nama evenNumber yang merupakan sebuah array dengan ketentuan:
    - Array menampung bilangan genap dari 1 hingga 100
    - Menggunakan perulangan for untuk memasukkan bilangan genap ke dalam array

### 2-3 Map
    A. Buatlah variabel currency yang merupakan Map dengan kriteria:
        - key "USD", value 14000
        - key "JPY", value 131
        - key "SGD", value 11000
        - key "MYR", value 3500

    B. Buatlah variabel priceInIDR yang bernilai perkalian:
        - priceInJPY dengan kurs JPY ke IDR


## Latihan 3
### 3-1 Function
    A.  Buatlah fungsi bernama minimal dengan ketentuan berikut:
        - Menerima dua buah argumen number, a dan b.
        - Mengembalikan nilai terkecil antara a atau b.
        - Bila nilai keduanya sama, maka kembalikan dengan nilai a
        
        contoh:
        minimal(1, 4) // 1
        minimal(3, 2) // 2
        minimal(3, 3) // 3

    B.  Buatlah fungsi bernama power dengan ketentuan berikut:
        - Menerima dua buah argumen number, a dan b.
        - Mengembalikan nilai dari a pangkat b.
        
        contoh:
        power(7, 3) // 343
        power(3, 3) // 27

##  Latihan 4
### 4-1 OOP
    A. Buatlah class bernama Animal dengan ketentuan:
        - Memiliki properti:
            - name: string
            - age: number
            - isMammal: boolean
        - Memiliki constructor untuk menginisialisasi properti:
            - name: string
            - age: number
            - isMammal: boolean
        - Memiliki method:
            - getName(): string, getter untuk properti name
            - getAge(): number, getter untuk properti age
            - getIsMammal(): boolean, getter untuk properti isMammal

    B. Buatlah class bernama Rabbit yang merupakan turunan dari class Animal dengan ketentuan:
        - Memiliki properti:
            - color: string
        - Memiliki method:
            - eat yang mengembalikan niai string: "Rabbit sedang makan!"
        - Ketika membuat instance dari class Rabbit, properti isMammal harus bernilai true

    C. Buatlah class bernama Eagle yang merupakan turunan dari class Animal dengan ketentuan:
        - Memiliki method:
            - fly yang mengembalikan niai string: "Eagle sedang terbang tinggi!"
        - Ketika membuat instance dari class Eagle, properti isMammal harus bernilai false

    D. Buatlah instance dari class Rabbit dan Eagle dengan ketentuan:
        - Instance Rabbit:
            - name: "Labi"
            - age: 2
        - Instance Eagle:
            - name: "Elo"
            - age: 4

## Latihan 05
### 05-1 Functional Programming
    Buatlah variable greatAuthors yang merupakan array berdasarkan hasil filter() dan map() dari books
    - Filter() digunakan untuk mengembalikan nilai item yang mengembalikan nilai sales lebih dari 1000000
    - Map() digunakan untuk books yang telah difilter, yang mengembalkan nilai string `${author} adalah penulis buku ${title} yang sangat hebat!`

## Latihan 06
### 06-1 Module
    A. Buat class Tiger lalu export class tersebut
        - Import nilai dari class Tiger pada file index.js

    B. Buat class Wolf lalu export class tersebut
        - Import nilai dari class Wolf pada file index.js

    C. Buat function fight yang menerima dua parameter yaitu tiger dan wolf

## Latihan 07
### 07-1 Error Handling
    A. Buatlah class bernama ValidationError yang merupakan turunan dari class Error
        - Class ValidationError memiliki properti message yang merupakan string
        - Class ValidationError memiliki properti name yang bernilai "ValidationError"

    B. Buatlah fungsi bernama validateValue yang menerima satu parameter bertipe number
        - Jika parameter bukan bertipe number, maka lemparkan error dengan menggunakan class ValidationError

        