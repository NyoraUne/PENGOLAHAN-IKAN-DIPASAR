import os
import subprocess
from datetime import datetime
import tkinter as tk
from tkinter import messagebox
from tkinter import simpledialog
import mysql.connector

def get_script_directory():
    return os.path.dirname(os.path.abspath(__file__))

def get_database_names():
    # Replace 'host', 'user', and 'password' with your MySQL server credentials
    connection = mysql.connector.connect(
        host="localhost",
        user="root",
        password="anderi77"
    )

    cursor = connection.cursor()
    cursor.execute("SHOW DATABASES")
    database_names = [database[0] for database in cursor.fetchall()]
    cursor.close()
    connection.close()

    return database_names

def backup_database():
    try:
        host = "localhost"     # Ganti sesuai host database MySQL Anda
        user = "root"      # Ganti dengan username MySQL Anda
        password = "anderi77"  # Ganti dengan password MySQL Anda
        database = database_var.get()  # Mengambil database yang dipilih dari dropdown

        if not database:
            messagebox.showerror("Error", "Pilih database terlebih dahulu!")
            return

        script_directory = get_script_directory()
        backup_dir = os.path.join(script_directory, "backup_db")

        if not os.path.exists(backup_dir):
            os.makedirs(backup_dir)

        # Membuat nama file backup dengan format: nama_database_tanggal_waktu.sql
        backup_file = f"{database}_{datetime.now().strftime('%Y%m%d_%H%M%S')}.sql"
        backup_path = os.path.join(backup_dir, backup_file)

        # Jalankan perintah mysqldump
        cmd = f"mysqldump --host={host} --user={user} --password={password} {database} > {backup_path}"
        subprocess.run(cmd, shell=True, check=True)

        messagebox.showinfo("Sukses", f"Backup database {database} berhasil. File backup disimpan di: {backup_path}")
    except Exception as e:
        messagebox.showerror("Error", f"Error saat melakukan backup: {str(e)}")

# Inisialisasi Tkinter
root = tk.Tk()
root.title("Backup Database")

# Dropdown untuk memilih database
database_list = get_database_names()
database_var = tk.StringVar(root)
database_var.set(database_list[0])  # Mengatur nilai default dropdown
database_dropdown = tk.OptionMenu(root, database_var, *database_list)
database_dropdown.pack(pady=10)

# Tombol untuk menjalankan backup
backup_button = tk.Button(root, text="Backup Database", command=backup_database)
backup_button.pack()

root.mainloop()
