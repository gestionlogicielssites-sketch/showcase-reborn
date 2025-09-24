import { Button } from '@/components/ui/button';
import { Globe, TrendingUp } from 'lucide-react';
import thierryHero from '@/assets/thierry-hero.jpg';

const HeroSection = () => {
  return (
    <section className="relative pt-20 pb-16 bg-gradient-to-br from-neutral-50 to-blue-50 overflow-hidden">
      <div className="container mx-auto px-4">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          {/* Left Content */}
          <div className="space-y-8">
            {/* Main Heading */}
            <div className="space-y-6">
              <h1 className="text-5xl lg:text-7xl font-bold leading-tight">
                Marketing{' '}
                <span className="text-blue-600">International</span> &{' '}
                <span className="block">Stratégie Culturelle</span>
              </h1>
              
              <p className="text-xl lg:text-2xl text-neutral-600 leading-relaxed">
                Expert en développement commercial international avec une spécialisation unique 
                dans les cultures nordiques. Je transforme votre compréhension culturelle en 
                avantage concurrentiel.
              </p>
            </div>

            {/* Badges */}
            <div className="flex flex-wrap gap-4">
              <div className="badge-nordic">
                <Globe className="w-4 h-4" />
                Expertise Nordique
              </div>
              <div className="badge-orange">
                <TrendingUp className="w-4 h-4" />
                Développement International
              </div>
            </div>

            {/* CTA Buttons */}
            <div className="flex flex-col sm:flex-row gap-4">
              <Button className="btn-primary text-lg px-8 py-4">
                Découvrir mes services
              </Button>
              <Button className="btn-secondary text-lg px-8 py-4">
                Voir mon parcours
              </Button>
            </div>

            {/* Stats */}
            <div className="grid grid-cols-3 gap-8 pt-8">
              <div className="text-center">
                <div className="stat-number">15+</div>
                <div className="stat-label">Années d'expérience</div>
              </div>
              <div className="text-center">
                <div className="stat-number">25+</div>
                <div className="stat-label">Marchés analysés</div>
              </div>
              <div className="text-center">
                <div className="stat-number">100+</div>
                <div className="stat-label">Projets réalisés</div>
              </div>
            </div>
          </div>

          {/* Right Content - Photo */}
          <div className="relative">
            <div className="relative rounded-2xl overflow-hidden shadow-2xl">
              <img
                src={thierryHero}
                alt="Thierry Robert - Expert Marketing International"
                className="w-full h-auto object-cover"
              />
              
              {/* Floating Badge */}
              <div className="absolute bottom-6 left-6 bg-white/95 backdrop-blur-sm rounded-lg p-4 shadow-lg">
                <div className="flex items-center gap-3">
                  <div className="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                    <TrendingUp className="w-6 h-6 text-white" />
                  </div>
                  <div>
                    <div className="font-semibold text-neutral-800">Croissance</div>
                    <div className="text-sm text-neutral-600">Internationale</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;