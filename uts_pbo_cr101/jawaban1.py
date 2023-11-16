class Hewan:
    def __init__(self, nama):
        self.nama = nama

    def bersuara(self):
        print("Bunyi hewan")

class Kucing(Hewan):
    def bersuara(self):
        print("Meong!")

class Anjing(Hewan):
    def bersuara(self):
        print("Guk guk!")


kucing = Kucing("Kitty")
kucing.bersuara()

anjing = Anjing("Doggy")
anjing.bersuara()
