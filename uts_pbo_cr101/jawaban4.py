def bagi(a, b):
    try:
        hasil = a / b
        return hasil
    except ZeroDivisionError:
        return "Error: Pembagian dengan nol tidak diizinkan"
    except TypeError:
        return "Error: Jenis data tidak sesuai"

print(bagi(10, 2))    
print(bagi(10, 0))    
print(bagi("10", 2))   
