class Mobil:
    def __init__(self, merk, warna):
        self.__merk = merk  
        self.__warna = warna

    def get_merk(self):
        return self.__merk

    def set_merk(self, merk_baru):
        self.__merk = merk_baru

    def get_warna(self):
        return self.__warna

    def set_warna(self, warna_baru):
        self.__warna = warna_baru


mobil1 = Mobil("Toyota", "Hitam")
print("Merk:", mobil1.get_merk())
print("Warna:", mobil1.get_warna())

mobil1.set_merk("Honda")
mobil1.set_warna("Putih")

print("Merk setelah diubah:", mobil1.get_merk())
print("Warna setelah diubah:", mobil1.get_warna())
