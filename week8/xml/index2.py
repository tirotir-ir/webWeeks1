import xml.etree.ElementTree as ET
import tkinter as tk
from tkinter import scrolledtext

def load_and_display():
    tree = ET.parse('address_book.xml')
    root = tree.getroot()
    
    result_text.delete(1.0, tk.END)  # Clear the text area
    
    for entry in root.findall('entry'):
        name = entry.find('name').text
        email = entry.find('email').text
        phone = entry.find('phone').text
        
        result_text.insert(tk.END, f"Name: {name}\nEmail: {email}\nPhone: {phone}\n\n")

# Create the main window
root = tk.Tk()
root.title("XML Data Viewer")

# Create a button to load and display data
load_button = tk.Button(root, text="Load and Display Data", command=load_and_display)
load_button.pack()

# Create a scrolled text area to display the data
result_text = scrolledtext.ScrolledText(root, width=40, height=10)
result_text.pack()

# Start the GUI event loop
root.mainloop()
