import tkinter as tk

def on_button_click():
    label_result.config(text="Hello, " + entry_name.get())

app = tk.Tk()
app.title("Simple GUI")

label = tk.Label(app, text="Enter your name:")
label.pack(pady=10)

entry_name = tk.Entry(app)
entry_name.pack(pady=10)

button_submit = tk.Button(app, text="Submit", command=on_button_click)
button_submit.pack(pady=20)

label_result = tk.Label(app, text="")
label_result.pack(pady=10)

app.mainloop()
