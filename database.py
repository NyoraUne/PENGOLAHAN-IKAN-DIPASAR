import tkinter as tk
from tkinter import ttk
import mysql.connector
import pyperclip  # Modul untuk menyalin teks ke clipboard

def show_fields(event):
    selected_item = tree.focus()
    if selected_item:
        table_name = tree.item(selected_item)['values'][0]

        # Ganti dengan informasi koneksi database Anda
        host = 'localhost'
        user = 'root'
        password = 'Anderi77.'
        database_name = entry_database.get()

        try:
            # Membuat koneksi ke database
            connection = mysql.connector.connect(
                host=host,
                user=user,
                passwd=password,
                database=database_name
            )

            if connection.is_connected():
                # Membuat cursor untuk menjalankan query
                cursor = connection.cursor()

                # Mendapatkan nama kolom dan tipe datanya
                cursor.execute(f"SHOW COLUMNS FROM {table_name}")
                columns = cursor.fetchall()

                # Membersihkan tabel sebelum menampilkan hasil baru
                for row in tree_fields.get_children():
                    tree_fields.delete(row)

                # Menampilkan hasil dalam tabel
                for column in columns:
                    field_name = column[0]
                    field_type = column[1]
                    field_length = column[2]
                    tree_fields.insert("", "end", values=(field_name, field_type, field_length))

                # Menutup cursor dan koneksi
                cursor.close()
                connection.close()

        except mysql.connector.Error as error:
            print(f"Error: {error}")

# Fungsi untuk menghasilkan elemen HTML dari field name
def generate_html_element():
    selected_item = tree_fields.focus()
    if selected_item:
        field_name = tree_fields.item(selected_item)['values'][0]
        html_element = f'<div class="input-group mb-2">\n  <span class="input-group-text">@</span>\n  <input name="{field_name}" type="text" class="form-control">\n</div>'
        text_result.insert("end", html_element + "\n")  # Menambahkan hasil ke dalam widget text_result
        text_result.see("end")  # Memastikan agar widget text_result selalu mengarah ke bagian bawah saat ada tambahan data

def copy_element_html():
    # Mengambil indeks awal dan akhir dari teks yang dipilih (elemen HTML)
    start_index = text_result.index("sel.first")
    end_index = text_result.index("sel.last")
    
    # Memastikan teks yang dipilih valid dan non-kosong
    if start_index and end_index:
        # Mengambil teks yang dipilih (elemen HTML) dari widget text_result
        element_html = text_result.get(start_index, end_index)
        pyperclip.copy(element_html)  # Menyalin elemen HTML ke clipboard

# Membuat GUI
root = tk.Tk()
root.title("List Tables and Field Names in MySQL Database")
root.geometry("800x600")

# Label dan Entry untuk input nama database
label_database = tk.Label(root, text="Nama Database:")
label_database.pack(pady=10)
entry_database = tk.Entry(root)
entry_database.pack()

# Tombol untuk menampilkan daftar tabel
button_show = tk.Button(root, text="Show Tables")
button_show.pack(pady=10)

# Tabel untuk menampilkan daftar tabel
tree = ttk.Treeview(root, columns=("Table Name",), show="headings")
tree.heading("Table Name", text="Table Name")
tree.pack(pady=10)

# Tabel untuk menampilkan daftar kolom
tree_fields = ttk.Treeview(root, columns=("Field Name", "Field Type", "Field Length"), show="headings")
tree_fields.heading("Field Name", text="Field Name")
tree_fields.heading("Field Type", text="Field Type")
tree_fields.heading("Field Length", text="Field Length")
tree_fields.pack(pady=10)

# Menghubungkan fungsi show_fields saat pengguna mengklik pada nama tabel
tree.bind("<ButtonRelease-1>", show_fields)

# Fungsi untuk menampilkan daftar tabel
def get_tables():
    database_name = entry_database.get()

    # Ganti dengan informasi koneksi database Anda
    host = 'localhost'
    user = 'root'
    password = 'Anderi77.'

    try:
        # Membuat koneksi ke database
        connection = mysql.connector.connect(
            host=host,
            user=user,
            passwd=password,
            database=database_name
        )

        if connection.is_connected():
            # Membuat cursor untuk menjalankan query
            cursor = connection.cursor()

            # Mendapatkan nama tabel yang ada di database
            cursor.execute("SHOW TABLES")
            tables = cursor.fetchall()

            # Membersihkan tabel sebelum menampilkan hasil baru
            for row in tree.get_children():
                tree.delete(row)

            # Menampilkan hasil dalam tabel
            for table in tables:
                table_name = table[0]
                tree.insert("", "end", values=(table_name,))

            # Menutup cursor dan koneksi
            cursor.close()
            connection.close()

    except mysql.connector.Error as error:
        print(f"Error: {error}")

# Menyambungkan tombol Show Tables dengan fungsi get_tables
button_show.config(command=get_tables)

# Tombol untuk menghasilkan elemen HTML
button_generate_html = tk.Button(root, text="Generate HTML Element", command=generate_html_element)
button_generate_html.pack(pady=10)

# Tombol untuk menyalin elemen HTML ke clipboard
button_copy_html = tk.Button(root, text="Copy Element HTML", command=copy_element_html)
button_copy_html.pack(pady=10)

# Widget untuk menampilkan hasil HTML
scrollbar = tk.Scrollbar(root, orient="vertical")
text_result = tk.Text(root, wrap="none", yscrollcommand=scrollbar.set)
text_result.pack(fill="both", expand=True)
scrollbar.config(command=text_result.yview)
scrollbar.pack(side="right", fill="y")

root.mainloop()
