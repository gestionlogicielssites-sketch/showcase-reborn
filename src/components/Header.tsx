import { useState } from 'react';
import { Globe, Menu, X } from 'lucide-react';
import { Button } from '@/components/ui/button';

const Header = () => {
  const [isOpen, setIsOpen] = useState(false);

  const navItems = [
    { label: 'Expertise', href: '#expertise' },
    { label: 'Services', href: '#services' },
    { label: 'À propos', href: '#about' },
    { label: 'Contact', href: '#contact' },
  ];

  return (
    <header className="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm border-b border-neutral-200">
      <div className="container mx-auto px-4">
        <div className="flex items-center justify-between h-16">
          {/* Logo */}
          <div className="flex items-center gap-3">
            <div className="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
              <Globe className="w-6 h-6 text-white" />
            </div>
            <span className="text-xl font-semibold text-neutral-800">Thierry Robert</span>
          </div>

          {/* Navigation Desktop */}
          <nav className="hidden md:flex items-center gap-8">
            {navItems.map((item) => (
              <a
                key={item.label}
                href={item.href}
                className="text-neutral-600 hover:text-blue-600 font-medium transition-colors duration-200"
              >
                {item.label}
              </a>
            ))}
          </nav>

          {/* CTA Button */}
          <Button className="hidden md:inline-flex btn-primary">
            Contact
          </Button>

          {/* Mobile Menu Button */}
          <button
            onClick={() => setIsOpen(!isOpen)}
            className="md:hidden p-2 text-neutral-600 hover:text-blue-600"
          >
            {isOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
          </button>
        </div>

        {/* Mobile Navigation */}
        {isOpen && (
          <div className="md:hidden absolute top-16 left-0 right-0 bg-white border-b border-neutral-200 shadow-lg">
            <nav className="flex flex-col p-4 gap-4">
              {navItems.map((item) => (
                <a
                  key={item.label}
                  href={item.href}
                  className="text-neutral-600 hover:text-blue-600 font-medium py-2"
                  onClick={() => setIsOpen(false)}
                >
                  {item.label}
                </a>
              ))}
              <Button className="btn-primary mt-4">
                Contact
              </Button>
            </nav>
          </div>
        )}
      </div>
    </header>
  );
};

export default Header;